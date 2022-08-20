<!DOCTYPE html>

<html lang="en">


<!-- Mirrored from portotheme.com/html/molla/category.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 23 Dec 2019 10:23:16 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vimla Prints</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <?php 
    include_once('head_file.php');
    ?>
</head>

<body>
    <div class="page-wrapper">
        <?php 
        include_once('header.php');
        ?>
        <main class="main">
            <!--<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
                <div class="container">
                    <h1 class="page-title">Blog</h1>
                </div>
            </div>-->
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                    <!--
                    <nav class="blog-nav">
                        <ul class="menu-cat entry-filter justify-content-center">
                            <li class="active"><a href="#" data-filter="*">All Blog Posts<span>12</span></a></li>
                            <li><a href="#" data-filter=".lifestyle">Lifestyle<span>3</span></a></li>
                            <li><a href="#" data-filter=".shopping">Shopping<span>1</span></a></li>
                            <li><a href="#" data-filter=".fashion">Fashion<span>1</span></a></li>
                            <li><a href="#" data-filter=".travel">Travel<span>2</span></a></li>
                            <li><a href="#" data-filter=".hobbies">Hobbies<span>2</span></a></li>
                        </ul>
                    </nav>-->

                    <div class="entry-container max-col-2" data-layout="fitRows">

                        <?php 
                        $blog_res=$this->db->get_where('tbl_blog',array('blog_status'=>'publish'));
                        foreach($blog_res->result() as $blog_row)
                        {
                            ?>
                            <div class="entry-item lifestyle shopping col-sm-6">
                                <article class="entry entry-grid text-center">
                                    <figure class="entry-media">
                                        <a href="<?php echo base_url(); ?>user/blog/<?php echo $blog_row->blog_slug; ?>">
                                            <img src="<?php echo base_url().'files/admin/blog/'.$blog_row->blog_image; ?>" alt="image desc" 
                                            style="350px">
                                        </a>
                                    </figure><!-- End .entry-media -->

                                    <div class="entry-body">
                                        <!--<div class="entry-meta">
                                            <span class="entry-author">
                                                by <a href="#">John Doe</a>
                                            </span>
                                            <span class="meta-separator">|</span>
                                            <a href="#"><?php echo $blog_row->blog_publish_at; ?></a>
                                            <span class="meta-separator">|</span>
                                            <a href="#">2 Comments</a>
                                        </div>-->

                                        <h2 class="entry-title">
                                            <a href="<?php echo base_url(); ?>user/blog/<?php echo $blog_row->blog_slug; ?>"><?php echo $blog_row->blog_title; ?></a>
                                        </h2><!-- End .entry-title -->

                                        <!--<div class="entry-cats">
                                            in <a href="#">Lifestyle</a>,
                                            <a href="#">Shopping</a>
                                        </div>-->
                                        <!-- End .entry-cats -->

                                        <div class="entry-content">
                                            <!--<p><?php echo substr($blog_row->blog_content,0,50)."..."; ?></p>-->
                                            <a href="<?php echo base_url(); ?>user/blog/<?php echo $blog_row->blog_slug; ?>" class="read-more">View Full Article</a>
                                        </div><!-- End .entry-content -->
                                    </div><!-- End .entry-body -->
                                </article><!-- End .entry -->
                            </div><!-- End .entry-item -->

                            
                            <?php
                        }
                        ?>
                        
                    </div><!-- End .entry-container -->

                    <!--
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                    <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
                                </a>
                            </li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item">
                                <a class="page-link page-link-next" href="#" aria-label="Next">
                                    Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

        <?php 
        include_once('footer.php');
        ?>
    </div><!-- End .page-wrapper -->
    <?php 
    include_once('mobile_menu.php');
    ?>

    <?php
    include_once('category_footer_file.php');
    ?>
</body>


<!-- Mirrored from portotheme.com/html/molla/category.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 23 Dec 2019 10:24:05 GMT -->
</html>

<style type="text/css">
    .toolbox .form-control 
    {
        color: black;
        font-weight: 300;
        font-size: 1.2rem;
    }
</style>
<script type="text/javascript">
            var controller = "ajax/get_city";
            var base_url = "<?php echo base_url(); ?>";

     function getXMLHTTP() { //fuction to return the xml http object
        var xmlhttp=false;  
        try{
            xmlhttp=new XMLHttpRequest();
        }
        catch(e)    {       
            try{            
                xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch(e){
                try{
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
                }
                catch(e){
                    xmlhttp=false;
                }
            }
        }
            
        return xmlhttp;
    }

    function next_paging_data(next_page_no)
    {       
        var strURL=base_url+"user_ajax/next_paging_data"+"/"+next_page_no;
        //alert(strURL);
        var req = getXMLHTTP();
        if (req) {
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {
                    //alert(req.responseText);                      
                        document.getElementById('loading_img').style.visibility="hidden";
                        document.getElementById('loading_img').style.display="none";

                        document.getElementById("product_div").innerHTML=document.getElementById("product_div").innerHTML+req.responseText;
                        
                    } else {
                        alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                    }
                }               
            }           
            req.open("GET", strURL, true);
            req.send(null);
            
        }
    }

    
</script>
<input type="hidden" id="txt_page_no" name="txt_page_no" value="1">
<script type="text/javascript">

    $(window).scroll(function() {

        if($(window).scrollTop() + $(window).height() >= $(document).height()) {

            //var last_id = $(".post-id:last").attr("id");

            //loadMoreData(last_id);

            //alert("page load event");
            document.getElementById('loading_img').style.visibility="visible";
            document.getElementById('loading_img').style.display="block";
            

            var next_page_id = parseInt(document.getElementById('txt_page_no').value) + 1;

            document.getElementById('txt_page_no').value=next_page_id;
            next_paging_data(next_page_id);
            
            //alert(next_page_id);


        }

    });
</script>

<style type="text/css">
    .page-header.page-header-big 
    {
        min-height: 200px;
    }
</style>