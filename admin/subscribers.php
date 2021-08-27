<?php
include_once 'header.php';
?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">All Subscribers</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-md-responsive">
                    <thead class="bg-dark text-white">
                        <th>S.No.</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="id">1.</td>
                            <td>How to make a Website</td>
                            <td>Wheat</td>
                            <td>22 Aug, 2021</td>
                            <td class='edit'><a href='update-blog.php'><i class='fa fa-edit'></i></a></td>
                            <td class='delete'><a href='delete-blog.php'><i class='fa fa-trash'></i></a></td>
                        </tr>
                        <tr>
                            <td class="id">2.</td>
                            <td>How to make a Website</td>
                            <td>Pulses</td>
                            <td>22 Aug, 2021</td>
                            <td class='edit'><a  href='update-blog.php'><i class='fa fa-edit'></i></a></td>
                            <td class='delete'><a href='delete-blog.php'><i class='fa fa-trash'></i></a></td>
                        </tr>
                        <tr>
                            <td class="id">3.</td>
                            <td>How to make a Website</td>
                            <td>Corn</td>
                            <td>22 Aug, 2021</td>
                            <td class='edit'><a  href='update-blog.php'><i class='fa fa-edit'></i></a></td>
                            <td class='delete'><a href='delete-blog.php'><i class='fa fa-trash'></i></a></td>
                        </tr>
                        <tr>
                            <td class="id">4.</td>
                            <td>How to make a Website</td>
                            <td>Oilseeds</td>
                            <td>22 Aug, 2021</td>
                            <td class='edit'><a  href='update-blog.php'><i class='fa fa-edit'></i></a></td>
                            <td class='delete'><a href='delete-blog.php'><i class='fa fa-trash'></i></a></td>
                        </tr>
                        <tr> 
                            <td class="id">5.</td>
                            <td>How to make a Website</td>
                            <td>Pulses</td>
                            <td>22 Aug, 2021</td>
                            <td class='edit'><a  href='update-blog.php'><i class='fa fa-edit'></i></a></td>
                            <td class='delete'><a href='delete-blog.php'><i class='fa fa-trash'></i></a></td>
                        </tr>
                        <tr>
                            <td class="id">6.</td>
                            <td>How to make a Website</td>
                            <td>Wheat</td>
                            <td>22 Aug, 2021</td>
                            <td class='edit'><a href='update-blog.php'><i class='fa fa-edit'></i></a></td>
                            <td class='delete'><a href='delete-blog.php'><i class='fa fa-trash'></i></a></td>
                        </tr>
                        <tr>
                            <td class="id">7.</td>
                            <td>How to make a Website</td>
                            <td>Wheat</td>
                            <td>22 Aug, 2021</td>
                            <td class='edit'><a  href='update-blog.php'><i class='fa fa-edit'></i></a></td>
                            <td class='delete'><a href='delete-blog.php'><i class='fa fa-trash'></i></a></td>
                        </tr>
                    </tbody>
                </table>
                <!-- Pagination -->
                <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php 
    include_once 'footer.php';
?>