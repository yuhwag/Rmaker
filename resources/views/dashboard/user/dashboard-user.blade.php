<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/dashboard/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard/dark-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard/responsive.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/719a6dea95.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Rmaker</title>
</head>

<body>
    <div class="container-fluid m-0 p-0 dashboard-container d-flex">
        <div class="btn-show-hide-nav show-nav position-absolute d-md-none">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="side-container nav-expanded">
            <div class="d-none d-md-flex exp-col-btn"><i class="fa-solid fa-angle-right close"></i></div>
            <div class="side-navigation">
                <ul>
                    <a href="/" class="nav-header d-flex align-items-end">
                        <div class="rmaker-img">
                            <img class="black-logo" src="{{ asset('image/logo/lg-rmaker2-black.png') }}" alt="Avatar Profile">
                            <img class="white-logo" src="{{ asset('image/logo/lg-rmaker2-white.png') }}" alt="Avatar Profile">
                        </div>
                        <div class="rmaker-title">
                            <div class="title">Rmaker</div>
                        </div>
                    </a>
                    <li class="documents nav-li li-active"><span class="fa-solid fa-file"></span><span>Documents</span></li>
                    <li class="favorites nav-li"><span class="fa-solid fa-heart"></span><span>Favorites</span></li>
                    <li class="profile nav-li"><span class="fa-solid fa-circle-user"></span><span>Profile</span></li>
                    <li class="setting nav-li"><span class="fa-solid fa-gear"></span><span>Setting</span></li>
                </ul>

                <ul>
                    <li class="help nav-li"><span class="fa-solid fa-lightbulb"></span><span>Help</span></li>
                    <a href="{{route('user.logout')}}" class="nav-li"><span class="fa-solid fa-right-from-bracket"></span><span>Sign Out</span></a>
                </ul>
            </div>
            <div class="btn-show-hide-nav hide-nav d-md-none position-absolute"><i class="fa-solid fa-angles-left"></i></div>
        </div>
        <div class="dashboard-content">
            <!-- documents section -->
            <div class="container documents-container">
                <div class="header-documents d-flex">
                    <h5 class="resume head-text active">Resumes</h5>
                    <h5 class="coverletter head-text">Cover Letters</h5>
                </div>

                <div class="doc-section resume-section">
                    <div class="list-doc d-flex flex-wrap">
                        <a href="#" class="btn-add-new-doc d-flex justify-content-center align-items-center"><i class="fa-solid fa-plus"></i></a>

                        <div class="document doc-resume" style="background-image: url({{ asset('templates/resume/template-cv-1.jpg') }})">
                            <a href="#" class="btn-edit"><p>Edit <i class="fa-solid fa-pen ms-1"></i></p></a>
                            <div class="doc-info">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h5 class="doc-name mb-0" contenteditable="true">Document Untitled</h5>    
                                    <i class="fa-solid fa-pen"></i>
                                </div>
                                <p class="doc-updated">Updated: Mar 12, 2023</p>
                                <hr>
                                <div class="activity-btns d-flex justify-content-between align-items-center">
                                    <div class="btn-download"><i class="fa-solid fa-download"></i> Download</div>
                                    <a href="#" class="btn-delete-doc"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="document doc-resume" style="background-image: url({{ asset('templates/resume/template-cv-2.jpg') }})">
                            <a href="#" class="btn-edit"><p>Edit <i class="fa-solid fa-pen ms-1"></i></p></a>
                            <div class="doc-info">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h5 class="doc-name mb-0" contenteditable="true">Document Untitled</h5>    
                                    <i class="fa-solid fa-pen"></i>
                                </div>
                                <p class="doc-updated">Updated: Mar 12, 2023</p>
                                <hr>
                                <div class="activity-btns d-flex justify-content-between align-items-center">
                                    <div class="btn-download"><i class="fa-solid fa-download"></i> Download</div>
                                    <a href="#" class="btn-delete-doc"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="doc-section coverletter-section d-none">
                    <div class="list-doc d-flex flex-wrap">
                        <a href="#" class="btn-add-new-doc d-flex justify-content-center align-items-center"><i class="fa-solid fa-plus"></i></a>

                        <div class="document doc-coverletter" style="background-image: url({{ asset('templates/letter/template-1.png') }})">
                            <a href="#" class="btn-edit"><p>Edit <i class="fa-solid fa-pen ms-1"></i></p></a>
                            <div class="doc-info">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h5 class="doc-name mb-0" contenteditable="true">Document Untitled</h5>    
                                    <i class="fa-solid fa-pen"></i>
                                </div>
                                <p class="doc-updated">Updated: Mar 12, 2023</p>
                                <hr>
                                <div class="activity-btns d-flex justify-content-between align-items-center">
                                    <div class="btn-download"><i class="fa-solid fa-download"></i> Download</div>
                                    <a href="#" class="btn-delete-doc"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="document doc-coverletter" style="background-image: url({{ asset('templates/letter/template-2.png') }})">
                            <a href="#" class="btn-edit"><p>Edit <i class="fa-solid fa-pen ms-1"></i></p></a>
                            <div class="doc-info">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h5 class="doc-name mb-0" contenteditable="true">Document Untitled</h5>    
                                    <i class="fa-solid fa-pen"></i>
                                </div>
                                <p class="doc-updated">Updated: Mar 12, 2023</p>
                                <hr>
                                <div class="activity-btns d-flex justify-content-between align-items-center">
                                    <div class="btn-download"><i class="fa-solid fa-download"></i> Download</div>
                                    <a href="#" class="btn-delete-doc"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="document doc-coverletter" style="background-image: url({{ asset('templates/letter/template-3.png') }})">
                            <a href="#" class="btn-edit"><p>Edit <i class="fa-solid fa-pen ms-1"></i></p></a>
                            <div class="doc-info">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h5 class="doc-name mb-0" contenteditable="true">Document Untitled</h5>    
                                    <i class="fa-solid fa-pen"></i>
                                </div>
                                <p class="doc-updated">Updated: Mar 12, 2023</p>
                                <hr>
                                <div class="activity-btns d-flex justify-content-between align-items-center">
                                    <div class="btn-download"><i class="fa-solid fa-download"></i> Download</div>
                                    <a href="#" class="btn-delete-doc"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
            <!-- favorites -->
            <div class="container favorites-container d-none">
                <h5 class="head-text" style="padding-bottom: 10px;">Favorites</h5>
                <div class="list-doc d-flex flex-wrap">
                    <div class="document liked-doc position-relative" style="background-image: url({{ asset('templates/resume/template-cv-1.jpg') }})">
                        <a href="#" class="btn-use-template position-absolute">
                            <p class="position-absolute"><i class="fa-solid fa-copy me-2"></i>Use this template</p>
                            <form class="form-like" action="" method="post">
                                <i class="fa-solid fa-heart liked"></i>
                            </form>
                        </a>
                    </div>
                    
                    <div class="document liked-doc position-relative" style="background-image: url({{ asset('templates/resume/template-cv-1.jpg') }})">
                        <a href="#" class="btn-use-template position-absolute">
                            <p class="position-absolute"><i class="fa-solid fa-copy me-2"></i>Use this template</p>
                            <form class="form-like" action="" method="post">
                                <i class="fa-solid fa-heart liked"></i>
                            </form>
                        </a>
                    </div>
                    
                    <div class="document liked-doc position-relative" style="background-image: url({{ asset('templates/resume/template-cv-1.jpg') }})">
                        <a href="#" class="btn-use-template position-absolute">
                            <p class="position-absolute"><i class="fa-solid fa-copy me-2"></i>Use this template</p>
                            <form class="form-like" action="" method="post">
                                <i class="fa-solid fa-heart liked"></i>
                            </form>
                        </a>
                    </div>
                </div>
            </div>

            <!-- profile section -->
            <div class="container profile-container d-none">
                <form action="">
                    <div class="user-avatar d-flex align-items-center mb-4">
                        <div class="image me-5" style="background-image: url({{ asset('image/pics-about/members/3d-illustration-person-with-sunglasses.jpg') }})"></div>
                        <div class="avatar-buttons">
                            <input type="file" class="avatar-input d-none" name="avatar">
                            <div class="change-avatar">Change picture</div>
                            <div class="delete-avatar">Delete picture</div>
                        </div>
                    </div>
                    
                    <div class="inputs-info">
                        <div class="user-name row">
                            <div class="col-md-6">
                                <label for="firstname">First name</label>
                                <input type="text" name="firstname" id="firstname" class="mb-4" value="John">
                            </div>
                            <div class="col-md-6">
                                <label for="lastname">Last name</label>
                                <input type="text" name="lastname" id="lastname" class="mb-4" value="Smith">
                            </div>
                        </div>
                        <div class="user-email">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="mb-4" value="abc123@gmail.com">
                        </div>
                        <div class="user-phone">
                            <label for="phone">Phone</label>
                            <input type="phone" name="phone" id="phone" class="mb-4" value="0132456789">
                        </div>
                        <div class="user-address">
                            <label for="address">Address</label>
                            <input type="address" name="address" id="address" class="mb-4" value="19 Nguyen Huu Tho, HCM City.">
                        </div>
                    </div>
                    <div class="form-btns d-flex justify-content-end mt-3">
                        <button type="submit" class="btn-save me-4">Save changes</button>
                        <div class="btn-cancel">Cancel</div>
                    </div>
                </form>
            </div>
            
            <!-- setting -->
            <div class="container setting-container d-none">
                <h5 class="head-text" style="padding-bottom: 10px;">Setting</h5>
                <div class="setting-body">
                    <div class="row">
                        <div class="col-md-4 dark-mode d-flex justify-content-between align-items-center">
                            <div class="title-mode">Dark mode</div>
                            <div class="btn-mode">
                                <div class="circle-btn"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- help -->
            <div class="container help-container d-none">
                <div class="notice">
                    <h4 class="notice-text">Sorry, this page is not available now!</h4>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="{{ asset('js/dashboard/script.js') }}"></script>
<script>
    
</script>

</html>