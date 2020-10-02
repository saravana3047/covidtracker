<footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block"> 
    Copyrights © 2008-2017 <a href="<?=base_url();?>admin">Political Analysis</a> All Rights Reserved.
	</div>
	&nbsp;
  </footer>


  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

	<!-- jQuery 3 -->
	<script src="<?=base_url();?>admin_assets/assets/vendor_components/jquery/dist/jquery.min.js"></script>
	
	<!-- popper -->
	<script src="<?=base_url();?>admin_assets/assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="<?=base_url();?>admin_assets/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
	<!-- SlimScroll -->
	<script src="<?=base_url();?>admin_assets/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	
	<!-- FastClick -->
	<script src="<?=base_url();?>admin_assets/assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- minimal_admin App -->
	<script src="<?=base_url();?>admin_assets/js/template.js"></script>
	
	<!-- minimal_admin for demo purposes -->
	<script src="<?=base_url();?>admin_assets/js/demo.js"></script>
	<script src="<?php echo base_url();?>assets/plugin/jquery-ui/jquery-ui.js"></script>  
	<script src="<?=base_url();?>assets/plugin/bootstrap-notify/bootstrap-notify.js"></script>
	
	<style>
	.ms-options input[type=checkbox]{
		opacity: 1;
	}
	</style>
	<script src="<?=base_url();?>assets/plugin/validateengine/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?=base_url();?>assets/plugin/validateengine/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
	<script>
		jQuery(document).ready(function(){   
				
			jQuery("#myprofile").validationEngine({ promptPosition: "topLeft" });
			jQuery("#location").validationEngine({ promptPosition: "topLeft" });
			jQuery("#userroles").validationEngine({ promptPosition: "topLeft" });
			jQuery("#country").validationEngine({ promptPosition: "topLeft" });
			jQuery("#type").validationEngine({ promptPosition: "topLeft" });
			jQuery("#user").validationEngine({ promptPosition: "topLeft" });
			jQuery("#subject").validationEngine({ promptPosition: "topLeft" });
			jQuery("#topic").validationEngine({ promptPosition: "topLeft" });
			jQuery("#myForm").validationEngine({ promptPosition: "topLeft" });
			jQuery("#myFormAudio").validationEngine({ promptPosition: "topLeft" });
			jQuery("#addvideo").validationEngine({ promptPosition: "topLeft" });
			jQuery("#importSubjectForm").validationEngine({ promptPosition: "topLeft" });
			jQuery("#importTopicForm").validationEngine({ promptPosition: "topLeft" });
			jQuery("#importVideoForm").validationEngine({ promptPosition: "topLeft" });
			jQuery("#pages").validationEngine({ promptPosition: "topLeft" });
			jQuery("#banner").validationEngine({ promptPosition: "topLeft" });
			jQuery("#pabanner").validationEngine({ promptPosition: "topLeft" });
			jQuery("#bottomBanner").validationEngine({ promptPosition: "topLeft" });
			jQuery("#bottomPabanner").validationEngine({ promptPosition: "topLeft" });
			jQuery("#settings").validationEngine({ promptPosition: "topLeft" });
			jQuery("#importAllForm").validationEngine({ promptPosition: "topLeft" });
			jQuery("#books").validationEngine({ promptPosition: "topLeft" });
			//jQuery("#political_analysis").validationEngine({ promptPosition: "topLeft" });
			jQuery("#political_analysis").validationEngine('attach',{ promptPosition: "topLeft" , binded: "TRUE"}); 
			jQuery("#article_booklets").validationEngine({ promptPosition: "topLeft" });
			jQuery("#creative_knowledge").validationEngine({ promptPosition: "topLeft" }); 
			jQuery("#gallery_images").validationEngine({ promptPosition: "topLeft" }); 
			jQuery("#pages").validationEngine({ promptPosition: "topLeft" }); 
		});
	</script> 
	
	 <script src="<?=base_url();?>admin_assets/assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>
    
    <!-- start - This is for export functionality only -->
    <script src="<?=base_url();?>admin_assets/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?=base_url();?>admin_assets/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.flash.min.js"></script>
    <script src="<?=base_url();?>admin_assets/assets/vendor_plugins/DataTables-1.10.15/ex-js/jszip.min.js"></script>
    <script src="<?=base_url();?>admin_assets/assets/vendor_plugins/DataTables-1.10.15/ex-js/pdfmake.min.js"></script>
    <script src="<?=base_url();?>admin_assets/assets/vendor_plugins/DataTables-1.10.15/ex-js/vfs_fonts.js"></script>
    <script src="<?=base_url();?>admin_assets/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.html5.min.js"></script>
    <script src="<?=base_url();?>admin_assets/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
	
	<!-- minimal_admin for Data Table -->
	<script src="<?=base_url();?>admin_assets/js/pages/data-table.js"></script>
	<script src="<?=base_url();?>admin_assets/assets/vendor_components/jquery-knob/js/jquery.knob.js"></script>
	<script src="<?=base_url();?>admin_assets/assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
	<script src="<?=base_url();?>admin_assets/assets/vendor_components/chart-js/chart.js"></script>
	<script src="<?=base_url();?>admin_assets/js/pages/widget-inline-charts.js"></script>
	 
	 
	 <script>
	function switchAdd(classFile,url_pass){
		$('.'+classFile).checkboxpicker();
			
		$('.'+classFile).change(function() { 

			var status = $(this).prop('checked');
			var getId 	=	$(this).attr('attr-id');
			var statusStr	=	'N';
			if(status==true)
				statusStr	=	'Y';
			$.post(url_pass, { status: statusStr, getId: getId})
			  .done(function( data ){ 
			  var statusmsg		=	'<strong>Success</strong> Published Successfully!';
			  if(status==false){
				  statusmsg		=	'<strong>Success</strong> Un Published Successfully!';
			  }
				   var notify = jQuery.notify(statusmsg, {
						type: 'success',
						allow_dismiss: true 
					}); 
			  });
							 
		});
	}
	$(document).ready(function() {
		//{"pageLength": 1}
		$('.tablearrange').DataTable(
			{"fnDrawCallback": function() {
				 switchAdd('content',"<?=base_url();?>books/setContentPublished");
				 switchAdd('books',"<?=base_url();?>books/setPublished");
				 switchAdd('political',"<?=base_url();?>political_analysis/setPublished");
				 switchAdd('article_booklets',"<?=base_url();?>article_booklets/setPublished");
				 switchAdd('creative_knowledge',"<?=base_url();?>creative_knowledge/setPublished");
				 
				 $('.gallery').rebox({ selector: 'a' });
				 
			}
			}
		);
		 $('.tablearrange1').DataTable();
		
		$( ".dataTables_paginate a" ).click(function() {
			/* switchAdd('content',"<?=base_url();?>books/setContentPublished");
			 switchAdd('books',"<?=base_url();?>books/setPublished");
			 switchAdd('political',"<?=base_url();?>political_analysis/setPublished");
			 switchAdd('article_booklets',"<?=base_url();?>article_booklets/setPublished");
			 switchAdd('creative_knowledge',"<?=base_url();?>creative_knowledge/setPublished");
			 $('.content').checkboxpicker();
			
			$('.content').change(function() { 

				var status = $(this).prop('checked');
				var getId 	=	$(this).attr('attr-id');
				var statusStr	=	'N';
				if(status==true)
					statusStr	=	'Y';
				$.post( "<?=base_url();?>books/setContentPublished", { status: statusStr, getId: getId})
				  .done(function( data ){ 
				  var statusmsg		=	'<strong>Success</strong> Published Successfully!';
				  if(status==false){
					  statusmsg		=	'<strong>Success</strong> Un Published Successfully!';
				  }
					   var notify = jQuery.notify(statusmsg, {
							type: 'success',
							allow_dismiss: true 
						}); 
				  });
								 
			});
			
			
			$('.books').checkboxpicker();

			$('.books').change(function() { 

				var status = $(this).prop('checked');
				var getId 	=	$(this).attr('attr-id');
				var statusStr	=	'N';
				if(status==true)
					statusStr	=	'Y';
				$.post( "<?=base_url();?>books/setPublished", { status: statusStr, getId: getId})
				  .done(function( data ){ 
				  var statusmsg		=	'<strong>Success</strong> Published Successfully!';
				  if(status==false){
					  statusmsg		=	'<strong>Success</strong> Un Published Successfully!';
				  }
					   var notify = jQuery.notify(statusmsg, {
							type: 'success',
							allow_dismiss: true 
						}); 
				  });
								 
			});
			
			
			
			$('.political').checkboxpicker();

			$('.political').change(function() { 

				var status = $(this).prop('checked');
				var getId 	=	$(this).attr('attr-id');
				var statusStr	=	'N';
				if(status==true)
					statusStr	=	'Y';
				$.post( "<?=base_url();?>political_analysis/setPublished", { status: statusStr, getId: getId})
				  .done(function( data ){ 
				  var statusmsg		=	'<strong>Success</strong> Published Successfully!';
				  if(status==false){
					  statusmsg		=	'<strong>Success</strong> Un Published Successfully!';
				  }
					   var notify = jQuery.notify(statusmsg, {
							type: 'success',
							allow_dismiss: true 
						}); 
				  });
								 
			});

			
			
			$('.article_booklets').checkboxpicker();

			$('.article_booklets').change(function() { 

				var status = $(this).prop('checked');
				var getId 	=	$(this).attr('attr-id');
				var statusStr	=	'N';
				if(status==true)
					statusStr	=	'Y';
				$.post( "<?=base_url();?>article_booklets/setPublished", { status: statusStr, getId: getId})
				  .done(function( data ){ 
				  var statusmsg		=	'<strong>Success</strong> Published Successfully!';
				  if(status==false){
					  statusmsg		=	'<strong>Success</strong> Un Published Successfully!';
				  }
					   var notify = jQuery.notify(statusmsg, {
							type: 'success',
							allow_dismiss: true 
						}); 
				  });
								 
			});
			
			
			
			$('.creative_knowledge').checkboxpicker();

			$('.creative_knowledge').change(function() { 

				var status = $(this).prop('checked');
				var getId 	=	$(this).attr('attr-id');
				var statusStr	=	'N';
				if(status==true)
					statusStr	=	'Y';
				$.post( "<?=base_url();?>creative_knowledge/setPublished", { status: statusStr, getId: getId})
				  .done(function( data ){ 
				  var statusmsg		=	'<strong>Success</strong> Published Successfully!';
				  if(status==false){
					  statusmsg		=	'<strong>Success</strong> Un Published Successfully!';
				  }
					   var notify = jQuery.notify(statusmsg, {
							type: 'success',
							allow_dismiss: true 
						}); 
				  });
								 
			});
			*/

		
		});

		
	});
	

	</script>
	
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/plugin/multiselectlist/jquery.multiselect.css"/> 
	<script type="text/javascript" src="<?=base_url();?>assets/plugin/multiselectlist/jquery.multiselect.js"></script>
	<script>
	/*$(function() {
		var data, options;

		// headline charts
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[23, 29, 24, 40, 25, 24, 35],
				[14, 25, 18, 34, 29, 38, 44],
			]
		};

		options = {
			height: 300,
			showArea: true,
			showLine: false,
			showPoint: false,
			fullWidth: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#headline-chart', data, options);


		// visits trend charts
		data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			series: [{
				name: 'series-real',
				data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
			}, {
				name: 'series-projection',
				data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
			}]
		};

		options = {
			fullWidth: true,
			lineSmooth: false,
			height: "270px",
			low: 0,
			high: 'auto',
			series: {
				'series-projection': {
					showArea: true,
					showPoint: false,
					showLine: false
				},
			},
			axisX: {
				showGrid: false,

			},
			axisY: {
				showGrid: false,
				onlyInteger: true,
				offset: 0,
			},
			chartPadding: {
				left: 20,
				right: 20
			}
		};

		new Chartist.Line('#visits-trends-chart', data, options);


		// visits chart
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[6384, 6342, 5437, 2764, 3958, 5068, 7654]
			]
		};

		options = {
			height: 300,
			axisX: {
				showGrid: false
			},
		};

		new Chartist.Bar('#visits-chart', data, options);


		// real-time pie chart
		var sysLoad = $('#system-load').easyPieChart({
			size: 130,
			barColor: function(percent) {
				return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
			},
			trackColor: 'rgba(245, 245, 245, 0.8)',
			scaleColor: false,
			lineWidth: 5,
			lineCap: "square",
			animate: 800
		});

		var updateInterval = 3000; // in milliseconds

		setInterval(function() {
			var randomVal;
			randomVal = getRandomInt(0, 100);

			sysLoad.data('easyPieChart').update(randomVal);
			sysLoad.find('.percent').text(randomVal);
		}, updateInterval);

		function getRandomInt(min, max) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}

	});*/
	</script>
	  
<script>
$(function() {
    
    $('.Alphanumeric').keyup(function() {
        if (this.value.match(/[^a-zA-Z0-9 ]/g)) {
            this.value = this.value.replace(/[^a-zA-Z0-9 ]/g, '');
        }
    });
	$('.Alphabet').keyup(function() {
        if (this.value.match(/[^a-zA-Z ]/g)) {
            this.value = this.value.replace(/[^a-zA-Z ]/g, '');
        }
    });
	$('.AlphabetDot').keyup(function() {
        if (this.value.match(/[^a-zA-Z. ]/g)) {
            this.value = this.value.replace(/[^a-zA-Z. ]/g, '');
        }
    });
	$('.Numeric').keyup(function() {
        if (this.value.match(/[^0-9.]/g)) {
            this.value = this.value.replace(/[^0-9.]/g, '');
        }
    });
	$('.NumberOnly').keyup(function() {
        if (this.value.match(/[^0-9]/g)) {
            this.value = this.value.replace(/[^0-9]/g, '');
        }
    });
	$('.Alphanumeric').blur(function() {
        if (this.value.match(/[^a-zA-Z0-9 ]/g)) {
            this.value = this.value.replace(/[^a-zA-Z0-9 ]/g, '');
        }
    });
	
	$('.Alphabet').blur(function() {
        if (this.value.match(/[^a-zA-Z ]/g)) {
            this.value = this.value.replace(/[^a-zA-Z ]/g, '');
        }
    });
	$('.AlphabetDot').blur(function() {
        if (this.value.match(/[^a-zA-Z. ]/g)) {
            this.value = this.value.replace(/[^a-zA-Z. ]/g, '');
        }
    });
	$('.Numeric').blur(function() {
        if (this.value.match(/[^0-9.]/g)) {
            this.value = this.value.replace(/[^0-9.]/g, '');
        }
    });
	$('.NumberOnly').blur(function() {
        if (this.value.match(/[^0-9]/g)) {
            this.value = this.value.replace(/[^0-9]/g, '');
        }
    }); 
	
	 $('select[multiple].active.3col').multiselect({
            columns: 2,
            placeholder: 'Select States',
            search: true,
            searchOptions: {
                'default': 'Search States'
            },
            selectAll: true
      });
	   $('select[multiple].active.latestBooks').multiselect({
            columns: 2,
            placeholder: 'Select Latest Books',
            search: true,
            searchOptions: {
                'default': 'Search Latest Books'
            },
            selectAll: true
      });
	  $('select[multiple].active.latestbooks').multiselect({
            columns: 2,
            placeholder: 'Select Latest Books',
            search: true,
            searchOptions: {
                'default': 'Search Latest Books'
            },
            selectAll: true
      });

	   $('select[multiple].active.latestpolitical_analysis').multiselect({
            columns: 2,
            placeholder: 'Select',
            search: true,
            searchOptions: {
                'default': 'Search'
            },
            selectAll: true
      });
	  
	   $('select[multiple].subject').multiselect({
            columns: 3,
            placeholder: 'Select Subject',
            search: true,
            searchOptions: {
                'default': 'Search Subject'
            },
			onOptionClick :  function( element ){
				var selectedArray	=	[];
				var selecVal 		=	$('select[multiple].subject').next(); 
				 $(selecVal).find('li').each(function(){  
					if($(this).hasClass('selected')==true){
						selectedArray.push($(this).find('input').val());
					}
				});
				var selectedSubject	=	selectedArray.join(","); 
				loadTypeandLanguage(selectedSubject);
			},  
            selectAll: true
      });
	   $('select[multiple].subjectnew').multiselect({
            columns: 3,
            placeholder: 'Select Subject',
            search: true,
            searchOptions: {
                'default': 'Search Subject'
            },
			/* onOptionClick :  function( element ){
				var selectedArray	=	[];
				var selecVal 		=	$('select[multiple].subject').next(); 
				 $(selecVal).find('li').each(function(){  
					if($(this).hasClass('selected')==true){
						selectedArray.push($(this).find('input').val());
					}
				});
				var selectedSubject	=	selectedArray.join(","); 
				loadTypeandLanguage(selectedSubject);
			},  */ 
            selectAll: true
      });
});
function loadTypeandLanguage(selectedSubject){ 
	$.post( "<?=base_url();?>books/getRecords", { subject: selectedSubject})
	  .done(function( data ){
		  var languageId 		=	$('#language').val();
		  var typeId 			=	$('#type').val();
		 
		  data		=	JSON.parse(data);
		  
		  
		 /*  var languageStr		=	'<option value="">Select</option>'; 
		  $(data.languageData).each(function(index,languageSingle){
				var selected='';
				if(languageSingle.language_id==languageId)
					selected 	=	' selected ';
				languageStr		+='<option value="'+languageSingle.language_id+'" '+selected+'>'+languageSingle.name+'</option>';
		  });
		  $('#language').html(languageStr); */
		  
		  var typeStr		=	'<option value="">Select</option>'; 
		  $(data.typeData).each(function(index,typeSingle){
				var selected='';
				if(typeSingle.language_id==typeId)
					selected 	=	' selected ';
				typeStr		+='<option value="'+typeSingle.type_id+'" '+selected+'>'+typeSingle.name+'</option>';
		  });
		  $('#type').html(typeStr);
		  
		  
	  });
}

function changeSubjectSelect(langVal){
	$.post( "<?=base_url();?>books/getSubjects", { langVal: langVal})
	  .done(function( data ){ 
		  var typeId 			=	$('#type').val();
		 
		  data		=	JSON.parse(data);
		  
		  
		 /*  var languageStr		=	'<option value="">Select</option>'; 
		  $(data.languageData).each(function(index,languageSingle){
				var selected='';
				if(languageSingle.language_id==languageId)
					selected 	=	' selected ';
				languageStr		+='<option value="'+languageSingle.language_id+'" '+selected+'>'+languageSingle.name+'</option>';
		  });
		  $('#language').html(languageStr); */
		  
		  var subjectStr		=	''; 
		  $(data.subjectData).each(function(index,subjectSingle){
				subjectStr		+='<option value="'+subjectSingle.subject_id+'"  >'+subjectSingle.name+'</option>';
		  });
		  $('#subject').html(subjectStr);
		  $('select[multiple].subject').multiselect('reload');
		   var typeStr		=	'<option value="">Select</option>'; 
			$('#type').html(typeStr);
	  });
}
 </script>
<script type="text/javascript" src="<?=base_url();?>assets/plugin/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		//mode : "textareas",
		selector : ".texteditor",
		elements : "ajaxfilemanager",
		theme : "advanced",
		plugins : "advimage,advlink,media,contextmenu,autolink,lists,pagebreak,style,layer,table,save,advhr,emotions,iespell,insertdatetime,preview,searchreplace,print,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",
			theme_advanced_buttons1_add_before : "newdocument,separator",
			theme_advanced_buttons1_add : "fontselect,fontsizeselect",
			theme_advanced_buttons2_add : "separator,forecolor,backcolor,liststyle",
			theme_advanced_buttons2_add_before: "cut,copy,separator,",
			theme_advanced_buttons3_add_before : "",
			theme_advanced_buttons3_add : "media",
			theme_advanced_toolbar_location : "top",
			theme_advanced_toolbar_align : "left",
			extended_valid_elements : "hr[class|width|size|noshade]",
			file_browser_callback : "ajaxfilemanager",
			paste_use_dialog : false,
			theme_advanced_resizing : true,
			theme_advanced_resize_horizontal : true,
			apply_source_formatting : true,
			force_br_newlines : true,
			force_p_newlines : false,	
			remove_script_host : false,
			relative_urls : false,
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontselect,fontsizeselect,phpimage",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,
		content_css : "css/content.css",
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
	function ajaxfilemanager(field_name, url, type, win) {
			var ajaxfilemanagerurl = "../../../../plugin/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php";
			switch (type) {
				case "image":
					break;
				case "media":
					break;
				case "flash": 
					break;
				case "file":
					break;
				default:
					return false;
			}
            tinyMCE.activeEditor.windowManager.open({
                url: "../../../../plugin/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php",
                width: 782,
                height: 440,
                inline : "yes",
                close_previous : "no"
            },{
                window : win,
                input : field_name
            });
         }
		 function validateMultiselect(){  
			 if($('.ms-options .selected').length <=0){
				 alert('Please Choose Any Political Analysis');
				  return false;
			 }
			 return true;
		 }
	</script>
</body>
 
</html>