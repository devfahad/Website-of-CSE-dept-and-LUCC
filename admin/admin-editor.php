<?php include 'inc/header.php';?>
    <section class="dashboard">
        <div class="container-fluid">
            <div class="row">
                <?php include 'inc/sidebar.php';?>
                <div class="col-lg-10 col-md-9">
                    <div class="header">
                        <h2>Admins/Editors</h2>
                        
                        <div class="posts-info">
                            <div class="float-left">
                                <a href="#">All (<span id="total-admin-editor">22</span>) |</a> 
                                <a href="#">Administrator (<span id="total-admin">4</span>)</a> 
                                <a href="#">Editor (<span id="total-editor">18</span>)</a> 
                            </div>
                            <div class="float-right">
                                <form>
                                    <input type="search" id="post-search-input" name="" value="">
                                    <input type="submit" id="search-submit" class="button" value="Search Users">
                                </form>
                            </div>
                        </div>
                    </div>
                    <table class="all-posts-table table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Username</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><input type="checkbox">
                                    <strong><a href="#">user1</a></strong>
                                    <div class="row-actions">
                                        <span class="edit">
                                            <a href="#">Edit</a>
                                        </span>
                                        <span class="view">
                                            <a href="#">View</a>
                                        </span>
                                    </div>
                                </th>
                                <td><a href="#">Fahad</a></td>
                                <td><a href="#">user1@gmail.com</a></td>
                                <td>Administrator</td>
                            </tr>
                            <tr>
                                <th scope="row"><input type="checkbox">
                                    <strong><a href="#">user2</a></strong>
                                    <div class="row-actions">
                                        <span class="edit">
                                            <a href="#">Edit</a>
                                        </span>
                                        <span class="view">
                                            <a href="#">View</a>
                                        </span>
                                    </div>
                                </th>
                                <td><a href="#">Tanvir</a></td>
                                <td><a href="#">user2@gmail.com</a></td>
                                <td>Editor</td>
                            </tr>
                            <tr>
                                <th scope="row"><input type="checkbox">
                                    <strong><a href="#">user3</a></strong>
                                    <div class="row-actions">
                                        <span class="edit">
                                            <a href="#">Edit</a>
                                        </span>
                                        <span class="view">
                                            <a href="#">View</a>
                                        </span>
                                    </div>
                                </th>
                                <td><a href="#">Nafi</a></td>
                                <td><a href="#">user3@gmail.com</a></td>
                                <td>Editor</td>
                            </tr>
                            <tr>
                                <th scope="row"><input type="checkbox">
                                    <strong><a href="#">user4</a></strong>
                                    <div class="row-actions">
                                        <span class="edit">
                                            <a href="#">Edit</a>
                                        </span>
                                        <span class="view">
                                            <a href="#">View</a>
                                        </span>
                                    </div>
                                </th>
                                <td><a href="#">Habib</a></td>
                                <td><a href="#">user4@gmail.com</a></td>
                                <td>Administrator</td>
                            </tr>
                            <tr>
                                <th scope="row"><input type="checkbox">
                                    <strong><a href="#">user5</a></strong>
                                    <div class="row-actions">
                                        <span class="edit">
                                            <a href="#">Edit</a>
                                        </span>
                                        <span class="view">
                                            <a href="#">View</a>
                                        </span>
                                    </div>
                                </th>
                                <td><a href="#">Toi</a></td>
                                <td><a href="#">user5@gmail.com</a></td>
                                <td>Administrator</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body></html>