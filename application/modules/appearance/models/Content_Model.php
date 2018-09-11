<?php
class Content_Model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        // $this->load->library('Facebook');
		
    }

	public function get_categories() {
		$Query = "select HeadID, HeadName, PtnID, OrderID, GroupID, IsTransactable, PtnGroupCode, 0 as process_status, 0 as process_statusaa 
			from tbl_news_menu
			where 1=1 and IsTransactable = 1 order by PtnGroupCode ASC";
		$query_result = $this->db->query($Query)->result();
        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>';	
	}

	public function get_page_categories() {
		$Query = "select ID,  PageCategoryName 
			from tbl_page_category
			where 1=1 order by ID ASC";
		$query_result = $this->db->query($Query)->result();
        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>';	
	}

	public function get_news_link_data() {
		$Query = "SELECT tbl_links.*, tbl_news_menu.HeadID, tbl_news_menu.HeadName, tbl_news_menu.MenuSlug
            FROM tbl_links
            left join tbl_news_menu on tbl_links.MenuCategoryID=tbl_news_menu.HeadID
            where 1=1 AND tbl_links.MenuCategoryID != 0";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>'; 
	}

	public function get_news_data() {
		$Query = "SELECT tbl_news.NewsID, tbl_news.NewsTitle, tbl_news.NewsSlug, tbl_news.NewsPostedByID, tbl_news.ViewCount, tbl_news.NewsUpdateDate, tbl_news.PublishStatus, tbl_user.UserID, tbl_user.FullName
            FROM tbl_news
            left join tbl_user on tbl_news.NewsPostedByID=tbl_user.UserID
            where 1=1 ORDER BY tbl_news.NewsID DESC";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>';
	}

	public function get_resize($width, $height, $temp, $file, $ext) {
		/* Get original image x y*/
		  list($w, $h) = getimagesize($temp);
		  /* calculate new image size with ratio */
		  //$ratio = max($width/$w, $height/$h);
		  //$h = ceil($height / $ratio);
		  //$x = ($w - $width / $ratio) / 2;
		  //$w = ceil($width / $ratio);
		  /* new file name */
		  $path = "";
		  if($width == 220) {
		    $path = 'assets/uploads/220x110/' . $file;
		  } elseif($width == 300) {
		    $path = 'assets/uploads/300x150/' . $file;
		  } elseif($width == 720) {
		    $path = 'assets/uploads/720x360/' . $file;
		  } elseif($width == 150) {
		    $path = 'assets/uploads/150x150/' . $file;
		  }
		  
		  /* read binary data from image file */
		  //$imgString = file_get_contents($_FILES['image']['tmp_name']);

		  $imgString = file_get_contents($temp);
		  /* create image from string */
		  $image = imagecreatefromstring($imgString);
		  $tmp = imagecreatetruecolor($width, $height);
		  imagecopyresampled($tmp, $image,
		    0, 0,
		    0, 0,
		    $width, $height,
		    $w, $h);
		  /* Save image */
		  switch ($ext) {
		    case 'jpg':
		      imagejpeg($tmp, $path, 100);
		      break;
		    case 'jpeg':
		      imagejpeg($tmp, $path, 100);
		      break;
		    case 'png':
		      imagepng($tmp, $path, 0);
		      break;
		    case 'gif':
		      imagegif($tmp, $path);
		      break;
		    default:
		      exit;
		      break;
		  }
		  return $path;
		  /* cleanup memory */
		  imagedestroy($image);
		  imagedestroy($tmp);
	}

	public function file_upload($filename, $extension) {
		$this->db->trans_start();
        $tbl_media_Data = array(
            'FileName' => $filename,
            'FileType' => $extension,
			'FileCreatedDate' => date('d-m-Y'),
        );
        $this->db->insert('tbl_media', $tbl_media_Data);
        $this->db->trans_complete();
	}

	
	public function upload_news() {
		$newsTitle                = $this->input->post('newsTitle');
		$newsSlug                 = $this->input->post('newsSlug');
		$newsBody                 = $this->input->post('newsBody');
		$metaDescription          = ($this->input->post('metaDescription'))?$this->input->post('metaDescription'):"";
		$metaKeywords             = ($this->input->post('metaKeywords'))?$this->input->post('metaKeywords'):"";
		// $FBautoPost            	  = ($this->input->post('FBautoPost'))?$this->input->post('FBautoPost'):0;
		$publishStatus            = ($this->input->post('publishStatus'))?$this->input->post('publishStatus'):0;
		// $headline                 = ($this->input->post('headline'))?$this->input->post('headline'):0;
		// $newsoftheday             = ($this->input->post('newsoftheday'))?$this->input->post('newsoftheday'):0;
		// $top18news                = ($this->input->post('top18news'))?$this->input->post('top18news'):0;
		// $onlinevote               = ($this->input->post('onlinevote'))?$this->input->post('onlinevote'):0;
		$menu_categories_array    = $this->input->post('menu_categories');
		$newsPageCategory_array   = $this->input->post('newsPageCategory');
		$mediaID                  = ($this->input->post('mediaID'))?$this->input->post('mediaID'):"";
		$mediaImgTitle            = ($this->input->post('mediaImgTitle'))?$this->input->post('mediaImgTitle'):"";
		$mediaImgAltText          = ($this->input->post('mediaImgAltText'))?$this->input->post('mediaImgAltText'):"";
		$UserID          = $this->session->userdata("UserID"); 
		$insert_id = 0;

		date_default_timezone_set('Asia/dhaka');

		$date = date('d-m-Y');
		$dateTime = date('H:i');

		$count_menu_category = count($menu_categories_array);
		$count_page_category = count($newsPageCategory_array);

		$menu_categories_WorkingArray= array();
		$i=0;
		if(!empty($menu_categories_array)){			
			foreach($menu_categories_array as $check) {
				 $i++; 
				 $menu_categories_WorkingArray[$i] = $check; 
			}
		}

		$newsPageCategory_WorkingArray= array();
		$i=0;
		if(!empty($newsPageCategory_array)){			
			foreach($newsPageCategory_array as $check) {
				 $i++; 
				 $newsPageCategory_WorkingArray[$i] = $check; 
			}
		}

		//######## tbl_news entry start ########
		$this->db->trans_start();
        $tbl_news_Data = array(
            'NewsTitle' => $newsTitle,
            'NewsSlug' => $newsSlug,
			'NewsBody' => $newsBody,
			// 'NewsHeadLine' => $headline,
			// 'NewsOfTheDay' => $newsoftheday,
			// 'TopEighteenNews' => $top18news,
			// 'OnlineVote' => $onlinevote,
			'ImageLink' => $mediaID,
			'NewsCreatedDate' => $date,
			'NewsUpdateDate' => $date,
			'NewsUpdateTime' => $dateTime,
			'NewsPostedByID' => $UserID,
			// 'FBautoPost' 	=> $FBautoPost,
			'PublishStatus' => $publishStatus,
        );

        

        $this->db->insert('tbl_news', $tbl_news_Data);
        //echo '<pre>',print_r($tbl_news_Data),'</pre>';
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        //######## tbl_news entry End ########

        //######## tbl_links entry start ########

        for($i=1; $i<=$count_menu_category; $i++){
			//`ItemCode``SalePrice`SELECT * FROM `tbl_items` WHERE 1
			$tbl_menu_links_Data =array(
				'NewsID' => $insert_id,
				'MenuCategoryID'=> $menu_categories_WorkingArray[$i], 
			);
			$this->db->insert('tbl_links', $tbl_menu_links_Data);
			//echo '<pre>',print_r($tbl_menu_links_Data),'</pre>';				
		}

		for($i=1; $i<=$count_page_category; $i++){
			//`ItemCode``SalePrice`SELECT * FROM `tbl_items` WHERE 1
			$tbl_page_links_Data =array(
				'NewsID' => $insert_id,
				'PageCategoryID'=> $newsPageCategory_WorkingArray[$i], 
			);
			$this->db->insert('tbl_links', $tbl_page_links_Data);
			//echo '<pre>',print_r($tbl_page_links_Data),'</pre>';				
		}

        //######## tbl_links entry End ########

        //######## tbl_news_meta_data entry start ########
		$this->db->trans_start();
        $tbl_news_meta_Data = array(
            'NewsID' => $insert_id,
            'MetaDescripton' => $metaDescription,
            'MetaKeywoords' => $metaKeywords,
            'ImageTitle' => $mediaImgTitle,
			'ImageAltText' => $mediaImgAltText,
        );
        $this->db->insert('tbl_news_meta_data', $tbl_news_meta_Data);
        //echo '<pre>',print_r($tbl_news_meta_Data),'</pre>';
        $this->db->trans_complete();
        //######## tbl_news_meta_data entry End ########


/*---------------------------------------------------------------------------------------------------------------------------------------------------------*/
/*---------------------------------------------------------------------------------------------------------------------------------------------------------*/
/*---------------------------------------------------------------------------------------------------------------------------------------------------------*/


// After here adding or editing by Faruk Khan
// facebook auto post start

       $query1 = $this->db->get('tbl_news_menu');
       $fb_data = $query1->result();

       $query = $this->db->get('tbl_news');
       $isFB = $query->result();

       // $query = $this->db->get('tbl_facebook_post');
       // $get_fb_data = $query->result();
       // echo "<pre>";
       // print_r($tbl_menu_links_Data);

       // echo "<pre>";
       // print_r($fb_data);
       // die();

       // $this->load->view('facebook/src/Facebook/autoload.php');
       // foreach ($isFB as $key => $isFBpost) {}
       // foreach ($get_fb_data as $key => $value) {}

        // $fb = new Facebook\Facebook([
        //   'app_id' => "$value->ApplicationId",
        //   'app_secret' => "$value->ApplicationSecret",
        //   'default_graph_version' => 'v2.8',
        //   ]);

        // $helper = $fb->getRedirectLoginHelper();



        // $permissions = ['email']; // optional
        // $permissions = ['manage_pages', 'publish_pages']; // optional

        // echo "<pre>";
        // print_r($_SESSION['fb_access_token']);
        // die();
        	
        // try {
        // 	if (isset($_SESSION['fb_access_token'])) {
        // 		$accessToken = $_SESSION['fb_access_token'];
        // 	} else {
        //   		$accessToken = $helper->getAccessToken();
        // 	}
        // } catch(Facebook\Exceptions\FacebookResponseException $e) {
        //  	// When Graph returns an error
        //  	echo 'Graph returned an error: ' . $e->getMessage();

        //   	exit;
        // } catch(Facebook\Exceptions\FacebookSDKException $e) {
        //  	// When validation fails or other local issues
        // 	echo 'Facebook SDK returned an error: ' . $e->getMessage();
        //   	exit;
        //  }


         // echo "<pre>";
         // print_r($_SESSION);

   //      if (isset($accessToken)) { 
   //      	if (isset($_SESSION['fb_access_token'])) {
   //      		$fb->setDefaultAccessToken($_SESSION['fb_access_token']);
   //      	} else {
   //      		// getting short-lived access token
   //      		$_SESSION['fb_access_token'] = (string) $accessToken;

   //      	  	// OAuth 2.0 client handler
   //      		$oAuth2Client = $fb->getOAuth2Client();

   //      		// Exchanges a short-lived access token for a long-lived one
   //      		$longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['fb_access_token']);

   //      		$_SESSION['fb_access_token'] = (string) $longLivedAccessToken;

   //      		// setting default access token to be used in script
   //      		$fb->setDefaultAccessToken($_SESSION['fb_access_token']);
   //      	}

   //      	// redirect the user back to the same page if it has "code" GET variable
   //      	if (isset($_GET['code'])) {
   //      		header('Location: ./');
   //      	}

   //      	// getting basic info about user
   //      	try {
   //      		$profile_request = $fb->get('/me?fields=name,first_name,last_name,email');
   //      		$profile = $profile_request->getGraphNode()->asArray();
   //      	} catch(Facebook\Exceptions\FacebookResponseException $e) {
   //      		// When Graph returns an error
   //      		echo 'Graph returned an error: ' . $e->getMessage();
   //      		session_destroy();
   //      		// redirecting user back to app login page
   //      		header("Location: ./");
   //      		exit;
   //      	} catch(Facebook\Exceptions\FacebookSDKException $e) {
   //      		// When validation fails or other local issues
   //      		echo 'Facebook SDK returned an error: ' . $e->getMessage();
   //      		exit;
   //      	}
        	
   //      	// printing $profile array on the screen which holds the basic info about user

   //      	// echo "<pre>";
   //      	// print_r($profile);

   //      	// auto post in user timeline

   //      	// $post = $fb->post('/me/feed', array('message' => 'Hello this is from mytv! http://www.mytvbd.tv'));

   //      	$pages = $fb->get('/me/accounts');
   //      	$pages = $pages->getGraphEdge()->asArray();
   //      	// echo "<pre>";
   //      	// print_r($pages);

   //  		// http://mytvbd.tv/single_news/<?php echo $info->NewsID.'/'.$info->NewsSlug 
   //  		$NewsID   = $insert_id;
   //  		$NewsTitle = $newsTitle;
   //  		$NewsSlug = $newsSlug;
   //  		$PageName = $value->FacebookPage;
   //  		$url 	  = 'http://www.mytvbd.tv/'.'/single_news/'.$NewsID.'/'.$NewsSlug;
   //  		// $url 	  = base_url().'single_news/'.$NewsID.'/'.$NewsSlug;

   //  		// $url 	  = 'http://localhost/mytvbd/home'.'/single_news/'.$NewsID.'/'.$NewsSlug;

   //  		// echo "<pre>";
   //  		// print_r($url);

   //  		foreach ($fb_data as $key => $value1) {
   //  			// echo "<pre>";
   //  			// print_r($value1);
   //  			// print_r($tbl_menu_links_Data);
   //  			// die();

   //  			if ($value1->HeadID == $tbl_menu_links_Data['MenuCategoryID']) {

		 //    		if ($value1->FacebookShare == 1 && $isFBpost->FBautoPost == 1) {    		
		    		
			//     		foreach ($pages as $key) {
			//     			if ($key['name'] == $PageName) {
			//     				$post = $fb->post('/'.$key['id'].'/feed', array('message'=>$NewsTitle, 'link' => $url), $key['access_token']);
			//     				$post = $post->getGraphNode()->asArray();
			//     				// echo "<pre>";
			//     				// print_r($post);
			//     			}
			//     		}

			// 		} 
			// 	} 
			// }  		


   //        	// Now you can redirect to another page and use the access token from $_SESSION['fb_access_token']
   //      } else {
        	// replace your website URL same as added in the developers.facebook.com/apps e.g. if you used http instead of https and you used non-www version or www version of your website then you must add the same here
        	// $loginUrl = $helper->getLoginUrl('http://localhost/mytvbd/home/facebook_login', $permissions);
        	// echo '<h4 id="authorize"><u>Facebook Authorization:</u> <strong><a class="btn btn-success" target="__blank" href="' . $loginUrl . '">Authorize</a></strong></h4>';
        // }


        // end facebook auto post data

 	/*--------------------------------------------------------------------------------------------------------------------------------------------------*/
 	/*--------------------------------------------------------------------------------------------------------------------------------------------------*/
 	/*--------------------------------------------------------------------------------------------------------------------------------------------------*/
	
	}

	public function get_news_update_data($id) {
		$Query = "SELECT tbl_news.*, tbl_news_meta_data.*, tbl_media.MediaID, tbl_media.FileName, tbl_media.FileType
            FROM tbl_news
            left join tbl_media on tbl_news.ImageLink=tbl_media.MediaID
            left join tbl_news_meta_data on tbl_news.NewsID=tbl_news_meta_data.NewsID
            where 1=1 AND tbl_news.NewsID='$id'";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>';
	}

	public function get_newslink_update_data($id) {
		$Query = "SELECT * FROM tbl_links
            where 1=1 AND NewsID='$id'";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>'; 
	}

	public function update_news() {
		$newsTitle                = $this->input->post('newsTitle');
		$newsSlug                 = $this->input->post('newsSlug');
		$newsBody                 = $this->input->post('newsBody');
		$metaDescription          = ($this->input->post('metaDescription'))?$this->input->post('metaDescription'):"";
		$metaKeywords             = ($this->input->post('metaKeywords'))?$this->input->post('metaKeywords'):"";
		// $FBautoPost            	  = ($this->input->post('FBautoPost'))?$this->input->post('FBautoPost'):0;
		$publishStatus            = ($this->input->post('publishStatus'))?$this->input->post('publishStatus'):0;
		// $headline                 = ($this->input->post('headline'))?$this->input->post('headline'):0;
		// $newsoftheday             = ($this->input->post('newsoftheday'))?$this->input->post('newsoftheday'):0;
		// $top18news                = ($this->input->post('top18news'))?$this->input->post('top18news'):0;
		// $onlinevote               = ($this->input->post('onlinevote'))?$this->input->post('onlinevote'):0;
		$menu_categories_array    = $this->input->post('menu_categories');
		$newsPageCategory_array   = $this->input->post('newsPageCategory');
		$mediaID                  = ($this->input->post('mediaID'))?$this->input->post('mediaID'):"";
		$mediaImgTitle            = ($this->input->post('mediaImgTitle'))?$this->input->post('mediaImgTitle'):"";
		$mediaImgAltText          = ($this->input->post('mediaImgAltText'))?$this->input->post('mediaImgAltText'):"";

		$news_id = $this->input->post('newsID');

		date_default_timezone_set('Asia/dhaka');

		$date = date('d-m-Y');
		$dateTime = date('H:i');

		$count_menu_category = count($menu_categories_array);
		$count_page_category = count($newsPageCategory_array);

		$menu_categories_WorkingArray= array();
		$i=0;
		if(!empty($menu_categories_array)){			
			foreach($menu_categories_array as $check) {
				 $i++; 
				 $menu_categories_WorkingArray[$i] = $check; 
			}
		}

		$newsPageCategory_WorkingArray= array();
		$i=0;
		if(!empty($newsPageCategory_array)){			
			foreach($newsPageCategory_array as $check) {
				 $i++; 
				 $newsPageCategory_WorkingArray[$i] = $check; 
			}
		}

		//######## tbl_news Update start ########
		$this->db->trans_start();
        $tbl_news_Data = array(
            'NewsTitle' => $newsTitle,
            'NewsSlug' => $newsSlug,
			'NewsBody' => $newsBody,
			// 'NewsHeadLine' => $headline,
			// 'NewsOfTheDay' => $newsoftheday,
			// 'TopEighteenNews' => $top18news,
			// 'OnlineVote' => $onlinevote,
			'ImageLink' => $mediaID,
			'NewsUpdateDate' => $date,
			'NewsUpdateTime' => $dateTime,
			// 'FBautoPost' => $FBautoPost,
			'PublishStatus' => $publishStatus,
        );
        $this->db->where('NewsID', $news_id);
		$this->db->update('tbl_news', $tbl_news_Data); 
        //echo '<pre>',print_r($tbl_news_Data),'</pre>';
        $this->db->trans_complete();
        //######## tbl_news Update End ########


        //######## tbl_links Update start ########

        // ***** Delete Previous link Data From Link table *******

        $linksQuery = "SELECT LinkID, NewsID FROM tbl_links WHERE NewsID='$news_id'";
        $linksQuery_result = $this->db->query($linksQuery)->result();
		//echo '<pre>',print_r($linksQuery_result),'</pre>';

        if($linksQuery_result != "" ) {
        	foreach($linksQuery_result as $key=>$linkInfo) {
        		$this->db->where('LinkID', $linkInfo->LinkID);
				$this->db->delete('tbl_links'); 
        	}
        }      
        
        //  ******* Insert New Link Data ********

        for($i=1; $i<=$count_menu_category; $i++){
			//`ItemCode``SalePrice`SELECT * FROM `tbl_items` WHERE 1
			$tbl_menu_links_Data =array(
				'NewsID' => $news_id,
				'MenuCategoryID'=> $menu_categories_WorkingArray[$i], 
			);
			$this->db->insert('tbl_links', $tbl_menu_links_Data);
			//echo '<pre>',print_r($tbl_menu_links_Data),'</pre>';				
		}

		for($i=1; $i<=$count_page_category; $i++){
			//`ItemCode``SalePrice`SELECT * FROM `tbl_items` WHERE 1
			$tbl_page_links_Data =array(
				'NewsID' => $news_id,
				'PageCategoryID'=> $newsPageCategory_WorkingArray[$i], 
			);
			$this->db->insert('tbl_links', $tbl_page_links_Data);
			//echo '<pre>',print_r($tbl_page_links_Data),'</pre>';				
		}

        //######## tbl_links Update End ########

        //######## tbl_news_meta_data entry start ########
		$this->db->trans_start();
        $tbl_news_meta_Data = array(
            'MetaDescripton' => $metaDescription,
            'MetaKeywoords' => $metaKeywords,
            'ImageTitle' => $mediaImgTitle,
			'ImageAltText' => $mediaImgAltText,
        );
        $this->db->where('NewsID', $news_id);
		$this->db->update('tbl_news_meta_data', $tbl_news_meta_Data); 
        //echo '<pre>',print_r($tbl_news_meta_Data),'</pre>';
        $this->db->trans_complete();
        //######## tbl_news_meta_data entry End ########
	}

	public function delete_news($newsId) {


		//******* tbl_news Delete start *******
        $this->db->where('NewsID', $newsId);
		$this->db->delete('tbl_news'); 

		//******* tbl_news Delete End *******

        // ***** Delete link Data From Link table Start *******

        $linksQuery = "SELECT LinkID, NewsID FROM tbl_links WHERE NewsID='$newsId'";
        $linksQuery_result = $this->db->query($linksQuery)->result();
		//echo '<pre>',print_r($linksQuery_result),'</pre>';

        if($linksQuery_result != "" ) {
        	foreach($linksQuery_result as $key=>$linkInfo) {
        		$this->db->where('LinkID', $linkInfo->LinkID);
				$this->db->delete('tbl_links'); 
        	}
        }      
        
        //  ******* Delete link Data From Link table End ********

        // ******** tbl_news_meta_data Delete start ********
		
        $this->db->where('NewsID', $newsId);
		$this->db->delete('tbl_news_meta_data'); 
        //echo '<pre>',print_r($tbl_news_meta_Data),'</pre>';
        $this->db->trans_complete();
        // ******** tbl_news_meta_data Delete End ********
	}
	
}