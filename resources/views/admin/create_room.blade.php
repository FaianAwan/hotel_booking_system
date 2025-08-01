<!DOCTYPE html>
<html>
<head>
    @include('admin.css')
    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }

        .div_deg {
            padding-top: 30px;
        }



.div_center
{
    text-align: center;
    padding-top: 40px;
}


    </style>
</head>
<body>
    @include('admin.header')
    <!-- Sidebar Navidation Menus-->
    <span class="heading">Main</span>
    @include('admin.sidebar')
    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                
                    <div class="div_center">

    <h1 style="font-size: 30px; font-weight: bold;">Add Rooms</h1>
 
<form action="{{ route('add_room') }}" method="POST" enctype="multipart/form-data">
    @csrf
                   
                        <div class="div_deg">
                            <label>Room Title</label>
                            <input type="text" name="title">
                        </div>
                        <div class="div_deg">
                            <label>Description</label>
                            <textarea name="description"></textarea>
                        </div>
                        <div class="div_deg">
                            <label>Price</label>
                            <input type="number" name="price">
                        </div>
                        <div class="div_deg">
                            <label>Room Type</label>
                            <select name="type">
                                <option selected value="regular">Regular</option>
                                <option value="premium">Premium</option>
                                <option value="deluxe">Deluxe</option>
                            </select>
                        </div>
                        <div class="div_deg">
                            <label>Free wifi</label>
                            <select name="wifi">
                                <option selected value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="div_deg">
                            <label>Upload Image</label>
                            <input type="file" name="image">
                        </div>
                        <div class="div_deg">
                            <input class="btn bnt-primary" type="submit" value="Add Room">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    @include('admin.footer')
</body>
</html>
