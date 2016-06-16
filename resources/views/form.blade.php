<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="Page Description">
        <meta name="author" content="Pichai Sivawat">
        <title>Page Title</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container regis">
        	<section class="regis-header">
                <h1 class="text-center">ลงทะเบียนเข้าชมงานของบุคคลทั่วไป</h1>
                <h2 class="text-center"><small>วันศุกร์ที่ 7 พฤศจิกายน 2557</small></h2>
            </section>
            <section class="regis-form">
                <form method="POST" action="https://openhouse.it.kmitl.ac.th/register/guest/common" accept-charset="UTF-8"><input name="_token" type="hidden" value="QRmRyV6b04Elnyf4LsX2kC6MTxaW6cxOP6GZjIhz">
                    <h3>ข้อมูลส่วนตัว</h3>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                                <label>ชื่อ</label>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <input type="text" class="form-control" id="prefix" name="prefix" placeholder="นาย" required>
                                    </div>
                                    <div class="col-xs-9">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="เปิดบ้าน" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                                <label>นามสกุล</label>
                                <input type="text" class="form-control" id="surname" name="surname" placeholder="ไอทีลาดกระบัง" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                                <label>เพศ</label>
                                <div>
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" value="M" required> ชาย
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" value="F" required> หญิง
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" value="U" required> ไม่ระบุ
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                                <label>อายุ</label>
                                <input type="number" class="form-control" id="age" name="age" placeholder="100" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                                <label>อาชีพ</label>
                                <input type="text" class="form-control" id="career" name="career" placeholder="เจ้าของธุรกิจพันล้าน" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                                <label>จังหวัด</label>
                                <input type="text" class="form-control" id="province" name="province" placeholder="กรุงเทพฯ" required>
                            </div>
                        </div>
                    </div>
                    <h3>ช่องทางการติดต่อ</h3>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                                <label>อีเมลล์</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="openhouse@it.kmitl.ac.th" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                                <label>โทรศัพท์</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="088-888-8888" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" class="form-control" id="facebook" name="facebook" placeholder="fb.com/ITLadkrabangOpenhouse">
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                                <label>Twitter</label>
                                <input type="text" class="form-control" id="twitter" name="twitter" placeholder="twitter.com/ITKMITL">
                            </div>
                        </div>
                    </div>
                    <h3>ข่าวสารจาก IT Ladkrabang Open House</h3>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="news" value="yes"> ฉันต้องการรับข้อมูลข่าวสารจากทีมงาน IT Ladkrabang Open House
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block regis-btn">ลงทะเบียน</button>
                </form>
            </section>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </body>
</html>
