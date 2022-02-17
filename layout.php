<?php

    include_once $level.'config.php';

    //Kiểm tra là trang ADMIN hay WEB
    if($admin){
        //HEADER
        #1
        include_once $level. Header_path_AD."Header.php";
        #2
        include_once $level. Header_path_AD."Top-Header.php";
        //HEADER

        //PAGES ADMIN
            //Doanh thu
            #1
            if($home)
                include_once $level. Component_Admin_path."home.php";
            //User Profile
            #2
            if($userprofile)
                include_once $level. Component_Admin_path. "userprofile.php";
            //Product
            #3
            if($product)
                include_once $level. Component_Admin_path. "tableproduct.php";
            //Bill
            #4
            if($billsold)
                include_once $level. Component_Admin_path. "billsold.php";
            #5
            if($billpendingapproval)
                include_once $level. Component_Admin_path. "billpendingapproval.php";
            #6
            if($billapprovaled)
                include_once $level. Component_Admin_path. "billapprovaled.php";
            #7
            if($billcanceled)
                include_once $level. Component_Admin_path. "billcanceled.php";

            #8
            if($notification)
                include_once $level. Component_Admin_path. "notification.php";

            #9
            if($reader)
                include_once $level. Component_Admin_path. "tablereader.php";

            #10
            if($author)
                include_once $level. Component_Admin_path. "tableauthor.php";

        //PAGES ADMIN

        //FOOTER
        #1
        include_once $level. Footer_path_AD. "Footer.php";
        //FOOTER
    }else{
        //HEADER
        include_once $level. Header_path_WEB."Header.php";

        include_once $level. Header_path_WEB."Top-Header.php";
        //HEADER
        
        //PAGES ADMIN
            if($isIndex)
            {
                #1
                include_once $level. Component_Index_path."Best-Selling.php";
                #2
                include_once $level. Component_Index_path."Feature-Item.php";
                #3
                include_once $level. Component_Index_path."New-Realease.php";
                #4
                include_once $level. Component_Index_path."Collection-Count.php";
                #5
                include_once $level. Component_Index_path."Picked-By-author.php";
                #6
                include_once $level. Component_Index_path."Testimonials.php";
                #7
                include_once $level. Component_Index_path."Call-to-Action.php";
                #8
                include_once $level. Component_Index_path."Latest-News.php";
            }

            //Profile
            if($isProfile){
                #1
                include_once $level. Component_Profile_path."Inner-Banner.php";
                #2
                include_once $level. Component_Profile_path."menu-profile.php";
                #3
                include_once $level. Component_Profile_path."profile.php";
            }

           //Profile
            if($isBill){
                #1
                include_once $level. Component_BillOrder_path."Inner-Banner.php";
                #2
                include_once $level. Component_BillOrder_path."menu-profile.php";
                #3
                if($isBillOrder)
                    include_once $level. Component_BillOrder_path."billorder.php";
                if($isBillCancel)
                    include_once $level. Component_BillOrder_path."billcancel.php";
                if($isBillDeliveried)
                    include_once $level. Component_BillOrder_path."billdelivered.php";
                if($isBillPending)
                    include_once $level. Component_BillOrder_path."billpending.php";
                if($isDetailBill)
                include_once $level. Component_DetailBillOrder_path."detailBill.php";
            }
        
            //Profile
            if($isChangePassword){
                #1
                include_once $level. Component_ChangePassword_path."Inner-Banner.php";
                #2
                include_once $level. Component_ChangePassword_path."menu-profile.php";
                #3
                include_once $level. Component_ChangePassword_path."changepassword.php";
            }
            //Product
            if($isProduct)
            {
                #1
                include_once $level. Component_Product_path."Inner-Banner.php";
                #2
                include_once $level. Component_Product_path."News-Grid.php";
                #3
                include_once $level.Component_Path."Category.php";
                #4
                include_once $level.Component_Path."ListBook.php";
                #5
                include_once $level.Component_Path."Authors.php";
            }

            //Product Detail
            if($isProductDetail)
            {
                #1
                include_once $level. Component_Product_Detail_path."Inner-Banner.php";
                #2
                include_once $level. Component_Product_Detail_path."News-Grid.php";
                #3
                include_once $level. Component_Product_Detail_path."Books.php";
                #4
                include_once $level.Component_Path. "Category.php";
                #5
                include_once $level.Component_Path. "ListBook.php";
                #6
                include_once $level.Component_Path. "Authors.php";
            }

            //Author
            if($isAuthor)
            {
                #1
                include_once $level. Component_Author_path."Inner-Banner.php";
                #2
                include_once $level. Component_Author_path."Authors.php";
                #3
                include_once $level. Component_Author_path."Testimonials.php";
                #4
                include_once $level. Component_Author_path."Picked-By-Author.php";
            }

            //Author Detail
            if($isAuthorDetail)
            {
                #1
                include_once $level. Component_Author_Detail_path."Inner-Banner.php";
                #2
                include_once $level. Component_Author_Detail_path."Author-Detail.php";
            }

            //Contact Us
            if($isContactUs)
            {
                #1
                include_once $level. Component_Contactus_path."Inner-Banner.php";
                #2
                include_once $level. Component_Contactus_path."Contact-Us.php";
            }

            //News Detail
            if($isNewsDetail)
            {
                #1
                include_once $level. Component_NewsDetail_path."Inner-Banner.php";
                #2
                include_once $level. Component_NewsDetail_path."News-Grid.php";
            }

            //News Grid
            if($isNewsGrid)
            {
                #1
                include_once $level. Component_NewsGrid_path."Inner-Banner.php";
                #2
                include_once $level. Component_NewsGrid_path."News-Grid.php";
                #3
                include_once $level.Component_Path."Category.php";
                #4
                include_once $level.Component_Path."ListBook.php";
                #5
                include_once $level.Component_Path."Authors.php";
            }

            //News List
            if($isNewsList)
            {    
                #1
                include_once $level. Component_NewsList_path."Inner-Banner.php";
                #2
                include_once $level. Component_NewsList_path."News-Grid.php";
               #3
               include_once $level.Component_Path."Category.php";
               #4
               include_once $level.Component_Path."ListBook.php";
               #5
               include_once $level.Component_Path."Authors.php";
            }

            //Error
            if($isError)
            {
                #1
                include_once $level. Component_Error_path."Inner-Banner.php";
                #2
                include_once $level. Component_Error_path."Error.php";
            }

            //About Us
            if($isAboutUs)
            {
                #1
                include_once $level. Component_AboutUs_path."Inner-Banner.php";
                #2
                include_once $level. Component_AboutUs_path."AboutUs.php";
                #3
                include_once $level. Component_AboutUs_path."CallToAction.php";
                #4
                include_once $level. Component_AboutUs_path."Success.php";
                #5
                include_once $level. Component_AboutUs_path."Testimonials.php";
                #6
                include_once $level. Component_AboutUs_path."Authors.php";
            }
            //Cart
            if($isCart){
                #1
                include_once $level.Component_Cart_path."Inner-Banner.php";
                #2
                include_once $level.Component_Cart_path."cart.php";
                
            }
            // //order history
            // if($isOrderHistory){
            //     #1
            //     include_once $level.Component_OrderHistory_path."Inner-Banner.php";
            //     #2
            //     include_once $level.Component_OrderHistory_path."order-history.php";
                
            // }


        //PAGES WEB

    //Footer
        #1
        include_once $level. Footer_path_WEB."Footer.php";
        #2
        include_once $level. Footer_path_WEB."Wrapper.php";
    //Footer
}
?>