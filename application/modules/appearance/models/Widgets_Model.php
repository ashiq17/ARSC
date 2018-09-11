<?php
class Widgets_Model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		
    }

    public function get_sidebar_widget() {
    	$Query = "SELECT * FROM tbl_widgets_sidebar
            where 1=1 ORDER BY ID DESC";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>'; 
    }

    public function upload_sidebar_widget() {
    	$widgetTitle                = $this->input->post('widgetTitle');
		$widgetSlug                 = $this->input->post('widgetSlug');
		$widgetBody                 = $this->input->post('widgetBody');
		$publishStatus              = ($this->input->post('publishStatus'))?$this->input->post('publishStatus'):0;

		$parentChild = $this->db->get('tbl_widgets_sidebar');
		$parentChildCount = $parentChild->num_rows();
		$parentChildCount++;

		$this->db->trans_start();
        $tbl_sidbarWidget_Data = array(
            'WidgetTitle'   => $widgetTitle,
            'WidgetSlug'    => $widgetSlug,
            'WidgetBody'    => $widgetBody,
			'IsEditable'    => 1,
            'OrderID'       => $parentChildCount,
            'PublishStatus' => $publishStatus,
        );
        $this->db->insert('tbl_widgets_sidebar', $tbl_sidbarWidget_Data);
        $this->db->trans_complete();

        //echo '<pre>',print_r($tbl_sidbarWidget_Data),'</pre>';
    }

    public function get_sidebar_widget_data($id) {
    	$Query = "SELECT * FROM tbl_widgets_sidebar
            where 1=1 AND ID='$id'";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>'; 
    }

    public function update_sidebar_widget_data() {
    	$sidebarId                  = $this->input->post('sidebarId');
    	$widgetTitle                = $this->input->post('widgetTitle');
		$widgetSlug                 = $this->input->post('widgetSlug');
		$widgetBody                 = $this->input->post('widgetBody');
		$publishStatus              = ($this->input->post('publishStatus'))?$this->input->post('publishStatus'):0;

    	$this->db->trans_start();
        $tbl_sidbarWidget_update_Data = array(
            'WidgetTitle'   => $widgetTitle,
            'WidgetSlug'    => $widgetSlug,
            'WidgetBody'    => $widgetBody,
            'PublishStatus' => $publishStatus,
        );
		$this->db->update('tbl_widgets_sidebar', $tbl_sidbarWidget_update_Data, array("ID" => $sidebarId));
        $this->db->trans_complete();
    }

    public function get_page_widget() {
    	$Query = "SELECT * FROM tbl_widgets_page
            where 1=1 ORDER BY ID DESC";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>'; 
    }

    public function get_news_menus() {
        $Query = "SELECT * FROM tbl_news_menu
            where 1=1 AND HeadID!=1 ORDER BY PtnGroupCode ASC";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>'; 
    }

    public function upload_page_widget() {
        $widgetTitle                = $this->input->post('widgetTitle');
        $widgetSlug                 = $this->input->post('widgetSlug');
        $menuType                   = $this->input->post('menuType');
        $newsMenu                   = ($this->input->post('newsMenu'))?$this->input->post('newsMenu'):0;
        $widgetBody                 = ($this->input->post('widgetBody'))?$this->input->post('widgetBody'):"";
        $publishStatus              = ($this->input->post('publishStatus'))?$this->input->post('publishStatus'):0;
        $WidgetType = 0;
        $menuNewsType = 0;

        if($menuType == 1) {
            $WidgetType = 1;
            $newsMenu = $newsMenu;
            $widgetBody = "";
            $menuNewsType = $this->input->post('newsType');
        } else if($menuType == 2) {
            $WidgetType = 2;
            $newsMenu = 0;
            $widgetBody = $widgetBody;
        }

        $parentChild = $this->db->get('tbl_widgets_page');
        $parentChildCount = $parentChild->num_rows();
        $parentChildCount++;

        $this->db->trans_start();
        $tbl_pageWidget_Data = array(
            'WidgetTitle'      => $widgetTitle,
            'WidgetSlug'       => $widgetSlug,
            'WidgetBody'       => $widgetBody,
            'WidgetType'       => $WidgetType,
            'MenuType'         => $menuNewsType,
            'MenuCategoryID'   => $newsMenu,
            'IsEditable'       => 1,
            'OrderID'          => $parentChildCount,
            'PublishStatus'    => $publishStatus,
        );
        $this->db->insert('tbl_widgets_page', $tbl_pageWidget_Data);
        $this->db->trans_complete();

        //echo '<pre>',print_r($tbl_pageWidget_Data),'</pre>';
    }

    public function get_page_widget_data($id) {
        $Query = "SELECT tbl_widgets_page.*, tbl_news_menu.HeadID, tbl_news_menu.HeadName
            FROM tbl_widgets_page        
            left join tbl_news_menu on tbl_widgets_page.MenuCategoryID=tbl_news_menu.HeadID
            where 1=1 AND tbl_widgets_page.ID='$id'";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>'; 
    }

    public function update_page_widget_data() {
        $pageWidgetId               = $this->input->post('pageWidgetId');
        $widgetTitle                = $this->input->post('widgetTitle');
        $widgetSlug                 = $this->input->post('widgetSlug');
        $menuType                   = $this->input->post('menuType');
        $newsMenu                   = ($this->input->post('newsMenu'))?$this->input->post('newsMenu'):0;
        $widgetBody                 = ($this->input->post('widgetBody'))?$this->input->post('widgetBody'):"";
        $publishStatus              = ($this->input->post('publishStatus'))?$this->input->post('publishStatus'):0;
        $WidgetType = 0;
        $menuNewsType = 0;

        if($menuType == 1) {
            $WidgetType = 1;
            $newsMenu = $newsMenu;
            $widgetBody = "";
            $menuNewsType = $this->input->post('newsType');
        } else if($menuType == 2) {
            $WidgetType = 2;
            $newsMenu = 0;
            $widgetBody = $widgetBody;
        }

        $parentChild = $this->db->get('tbl_widgets_page');
        $parentChildCount = $parentChild->num_rows();
        $parentChildCount++;

        $this->db->trans_start();
        $tbl_pageWidget_update_Data = array(
            'WidgetTitle'      => $widgetTitle,
            'WidgetSlug'       => $widgetSlug,
            'WidgetBody'       => $widgetBody,
            'WidgetType'       => $WidgetType,
            'MenuType'         => $menuNewsType,
            'MenuCategoryID'   => $newsMenu,
            'PublishStatus'    => $publishStatus,
        );
        $this->db->update('tbl_widgets_page', $tbl_pageWidget_update_Data, array("ID" => $pageWidgetId));
        $this->db->trans_complete();

        //echo '<pre>',print_r($tbl_pageWidget_update_Data),'</pre>';
    }
}