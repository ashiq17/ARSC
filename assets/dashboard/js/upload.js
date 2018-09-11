var app = app || {};

(function(o) {
	"use strict";

	// Private methods
	var ajax, getFormData, setProgress;

	ajax = function(data) {
		//alert(data);
		var xmlhttp = new XMLHttpRequest();
		var uploaded;

		xmlhttp.addEventListener('readystatechange', function() {
			if(this.readyState === 4) {
				if(this.status === 200) {
					uploaded = JSON.parse(this.response);

					if(typeof o.options.finished === 'function') {
						o.options.finished(uploaded);
					}
				} else {
					if(typeof o.options.error === 'function') {
						o.options.error();
					}
				}
			}
		});

		xmlhttp.upload.addEventListener('progress', function(e) {
			var percent;

			if(e.lengthComputable === true) {
				percent = Math.round((event.loaded / event.total) * 100);
				setProgress(percent);
			}
		});

		xmlhttp.open('post', o.options.processor);
		xmlhttp.send(data);
	};

	getFormData = function(source) {
		var data = new FormData();
		var i;

		for(i = 0; i < source.length; i = i + 1) {
			data.append('files[]', source[i]);
		}

		return data;
	}; 

	setProgress = function(value) {
		if(o.options.progressBar !== undefined) {
			o.options.progressBar.style.width = value ? value + '%' : 0;
		}

		if(o.options.progressText !== undefined) {
			o.options.progressText.textContent = value ? value + '%' : '';
		}
	};

	o.uploader = function(options) {
		o.options = options;

		if(o.options.files !== undefined) {
			ajax(getFormData(o.options.files));
			//alert(getFormData(o.options.files));
			//var abc = {getFormData(o.options.files)};
			//alert(getFormData(o.options.files));
			//alert(JSON.stringify(getFormData(o.options.files)));
			//console.log(getFormData(o.options.files));
		}
	};
}(app));


(function() {
	"use strict";

	var dropZone = document.getElementById('drop-zone');
	var barFill = document.getElementById('bar-fill');
	var barFillText = document.getElementById('bar-fill-text');
	var uploadsFinished = document.getElementById('uploads-finished');

	var startUpload = function(files) {
		app.uploader({
			files: files,
			progressBar: barFill,
			progressText: barFillText,
			processor: uploadurl,

			finished: function(data) {
				var x;
				var uploadedElement;
				var uploadedAnchor;
				var uploadedStatus;
				var currFile;

				/*for(x = 0; x < data.length; x = x + 1) {
					currFile = data[x];

					uploadedElement = document.createElement('div');
					uploadedElement.className = 'upload-console-upload';

					uploadedAnchor = document.createElement('a');
					uploadedAnchor.textContent = currFile.name;

					if(currFile.uploaded) {
						uploadedAnchor.href = 'uploads/' + currFile.file;
					}

					uploadedStatus = document.createElement('span');
					uploadedStatus.textContent = currFile.uploaded ? 'uploaded' : 'Failed';

					uploadedElement.appendChild(uploadedAnchor);
					uploadedElement.appendChild(uploadedStatus);

					uploadsFinished.appendChild(uploadedElement);
					//alert(currFile.imgString);
				}*/

				//uploadsFinished.className = '';
				$('#fitabid2').tab('show');
				loadimages();
			},

			error: function() {
				console.log('There was an error');
			}
		});
	};

	// Standard form upload
	document.getElementById('standard-upload').addEventListener('click', function(e) {
		var standardUploadFiles = document.getElementById('standard-upload-files').files;
		e.preventDefault();

		startUpload(standardUploadFiles);
	});

	dropZone.ondrop = function(e) {
		e.preventDefault();
		this.className = 'upload-console-drop';

		startUpload(e.dataTransfer.files);
	};

	// Drop functionality
	dropZone.ondragover = function() {
		this.className = 'upload-console-drop drop';
		return false;
	};

	dropZone.ondragleave = function() {
		this.className = 'upload-console-drop';
		return false;
	};

}());