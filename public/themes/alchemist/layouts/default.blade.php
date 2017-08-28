<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>หาติว ดีลงาน</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="alchemist" name="author"/>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<?php echo HTML::style('themes/alchemist/assets/plugins/font-awesome/css/font-awesome.min.css');?>
<?php echo HTML::style('themes/alchemist/assets/plugins/simple-line-icons/simple-line-icons.min.css');?>
<?php echo HTML::style('themes/alchemist/assets/plugins/bootstrap/css/bootstrap.min.css');?>
<?php echo HTML::style('themes/alchemist/assets/plugins/uniform/css/uniform.default.css');?>
<?php echo HTML::style('themes/alchemist/assets/css/components-md.css');?>
<?php echo HTML::style('themes/alchemist/assets/css/plugins-md.css');?>
<?php echo HTML::style('themes/alchemist/assets/css/layout.css');?>
<?php echo HTML::style('themes/alchemist/assets/css/default.css');?>
<?php echo HTML::style('themes/alchemist/assets/css/custom.css');?>
</head>

<body class="page-md">

<?php echo Theme::partial('header'); ?>
<?php echo Theme::content(); ?>
<?php echo Theme::partial('footer'); ?>

<div class="scroll-to-top">
	<i class="icon-arrow-up"></i>
</div>
<!--[if lt IE 9]>
<?php echo HTML::script('themes/alchemist/assets/plugins/respond.min.js');?>
<?php echo HTML::script('themes/alchemist/assets/plugins/excanvas.min.js');?>
<![endif]-->
<?php echo HTML::script('themes/alchemist/assets/plugins/jquery.min.js');?>
<?php echo HTML::script('themes/alchemist/assets/plugins/jquery-migrate.min.js');?>
<?php echo HTML::script('themes/alchemist/assets/plugins/jquery-ui/jquery-ui.min.js');?>
<?php echo HTML::script('themes/alchemist/assets/plugins/bootstrap/js/bootstrap.min.js');?>
<?php echo HTML::script('themes/alchemist/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js');?>
<?php echo HTML::script('themes/alchemist/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js');?>
<?php echo HTML::script('themes/alchemist/assets/plugins/jquery.blockui.min.js');?>
<?php echo HTML::script('themes/alchemist/assets/plugins/jquery.cokie.min.js');?>
<?php echo HTML::script('themes/alchemist/assets/plugins/uniform/jquery.uniform.min.js');?>
<!-- END CORE PLUGINS -->
<?php echo HTML::script('themes/alchemist/assets/scripts/metronic.js');?>
<?php echo HTML::script('themes/alchemist/assets/scripts/layout.js');?>
<?php echo HTML::script('themes/alchemist/assets/scripts/demo.js');?>
<script>
    jQuery(document).ready(function() {
         Metronic.init(); // init metronic core components
         Layout.init(); // init current layout
         Demo.init(); // init demo features
      });
</script>
<script src="https://cdn.jsdelivr.net/lodash/4.17.4/lodash.min.js"></script>
<?php echo HTML::script('themes/alchemist/assets/scripts/jquery.Thailand.js/dist/jquery.Thailand.min.js');?>
<?php echo HTML::script('themes/alchemist/assets/scripts/jquery.Thailand.js/dependencies/typeahead.bundle.js');?>
<?php echo HTML::script('themes/alchemist/assets/scripts/jquery.Thailand.js/dependencies/JQL.min.js');?>
<script>
    let tmp = undefined
    let oriData = undefined
    let searchData = undefined
    let tmpType = undefined
    let isFiltered = false
    const searchList = [];

    const FlattenFilter = (type) => {
        console.log("searchList ===> ",searchList)
        console.log("type ====> ", type)
        if(_.isUndefined(oriData)){
            oriData = $('#result > .course-list')
        }
        if(_.isUndefined(tmp)){
           tmp = $('#result > .course-list')
        }else{
            if(tmpType !== type){
                tmpType = type
                tmp = $('#result > .course-list')
            }else{
                console.log('eq ==> ',tmp )
            }
        }
        const eiei = []
       
        tmp.each(function(index) {
            const result = _.map(searchList, item => {
                const title = $(this).find("h4#title").text()
                const subTitle = $(this).find("h4#subTitle").text()
                if(title.indexOf(item) > -1 || subTitle.indexOf(item) > -1){
                    return $(this)
                }
            })
            eiei.push(result)
        });
        tmpType = type
        $('#result').html(_.flatten(eiei))
    }

    const addTagGroup = (tagName) => {
        $('#tagGroup').append(`<button class="tag-item btn btn-sm btn-default">${tagName}</button>`)
    }

    const removeTagGroup = (tagName) => {
        $('.tag-item').each(function(index){
            const value = $(this).text()
            console.log('eeeeeeeeeeee c=>>>>', value)
            if(tagName === value){
                return $(this).remove()
            }
        })
    }

    const addSearchList = (item) => {
        if(searchList.indexOf(item) === -1){
            searchList.push(item)
            addTagGroup(item)
        }else{
            console.log('dupplicate')
        }
    }

    const removeSearchList = (item) => {
        if(searchList.indexOf(item) !== -1){
            searchList.splice(searchList.indexOf(item), 1)
            removeTagGroup(item)
        }
        if(searchList.length === 0){
            $('#result').html(oriData)
        }
    }

    $("#filterBySubject").change(function(){
        const value = this.value
        addSearchList(value)
        FlattenFilter('filterBySubject')
    });

    $("#filterByLevel").change(function(){
        const value = this.value
        addSearchList(value)
        FlattenFilter('filterByLevel')
    });

    $("#filterByDay").change(function(){
        const value = this.value
        addSearchList(value)
        FlattenFilter('filterByDay')
    });
    $("#filterByDuration").change(function(){
        const value = this.value
        addSearchList(value)
        FlattenFilter('filterByDuration')
    });

    $('#tagGroup').on('click', '.tag-item', function(){
        const value = $(this).text()
        removeSearchList(value)
    })


    ///locotion///
    $.Thailand({
    database: '{{URL::asset("themes/alchemist/assets/scripts/jquery.Thailand.js/database/db.json")}}', // path หรือ url ไปยัง database
    $district: $('#district'), // input ของตำบล
    $amphoe: $('#amphoe'), // input ของอำเภอ
    $province: $('#province'), // input ของจังหวัด
    $zipcode: $('#zipcode'), // input ของรหัสไปรษณีย์
    });
</script>
</body>
</html>
