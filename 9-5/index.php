





<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8"><![endif]-->
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="standard"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>【官网】BOSS直聘-互联网招聘神器！官方IP:直直</title>
    <meta name="keywords" content="BOSS直聘,直直,招聘,求职,找工作"/>
    <meta name="description" content="BOSS直聘是一款互联网求职招聘找工作软件，让求职者与Boss直接开聊、加快面试、即时反馈，找工作就用BOSS直聘。直直为BOSS直聘IP，下载APP让直直带你轻松找工作！"/>
    <link href="./css/main.css" type="text/css" rel="stylesheet">
</head>
<body>

<div id="wrap">
    







    <div id="main" class="inner">
        <div class="job-box">
            <div class="sider deliver-sider">
                <div class="nav-option">
                    <a ka="user-resume-chat"  href="/gchat/chat.html">聊天 <i class="fz fz-mes"></i></a>
                    <a ka="user-resume-delivery-box"  href="/geek/deliver.html">投递箱<i class="fz fz-deliver"></i></a>
                    <a ka="user-resume-my-resume"  href="/geek/myresume.html">我的简历<i class="fz fz-cv"></i></a>
                </div>
                <div class="sider-resume">
                    <div class="resume-attachment">
                        <h3 class="title">附件简历</h3>
                        
                            
                            
                            <div class="upload">
                                <div class="file-result">
                                    上传附件简历
                                </div>
                                <div class="file-btn"><a class="btn-upload-file"><input id="fileupload" type="file" name="file" ka="user-resume-upload-file" /></a></div>
                                <div class="file-tip">
                                    <p>支持 doc、docx、pdf、jpg、png 格式</p>
                                </div>
                            </div>
                            
                        
                    </div>
                    <!--<div class="tit">简历完成度<span class="progress-score">80%</span></div>
                    <div class="progress"><p></p></div>-->
                    <div class="resume-nav">
                        <ul>
                            <li><i class="fz-resume fz-info"></i><span>个人信息</span><a data-url="/geek/user/info.json" href="javascript:;" ka="user-resume-edit-userinfo-r" data-target="resume-userinfo"  class="link-edit">编辑</a></li>
                           <!-- <li><i class="fz-resume fz-contact"></i><span>联系方式</span><a href="/niurenweb/user/info" ka="user-resume-edit-phone-r" data-target="resume-contact" class="link-edit">编辑</a></li>-->
                            <li><i class="fz-resume fz-adventage"></i><span>我的优势</span><a data-url="/geek/getUserDescForm.json" href="javascript:;" ka="user-resume-edit-desc-r"  data-target="resume-summary"  class="link-edit">编辑</a></li>
                            <li><i class="fz-resume fz-positon"></i><span>求职意向</span><a data-url="/geek/getGeekExpectPositionForm.json" href="javascript:;"  ka="user-resume-edit-holpjob-r" data-target="resume-purpose" class="link-add">添加</a></li>
                            <li><i class="fz-resume fz-history"></i><span>工作经历</span><a data-url="/geek/getWorkExperienceForm.json" href="javascript:;" ka="user-resume-add-workexp-r" data-target="resume-history" class="link-add">添加</a></li>
                            <li><i class="fz-resume fz-project"></i><span>项目经验</span><a data-url="/geek/getGeekProjectExperienceForm.json" href="javascript:;" ka="user-resume-add-project-r"  data-target="resume-project"  class="link-add">添加</a></li>
                            <li><i class="fz-resume fz-eaducation"></i><span>教育经历</span><a data-url="/geek/getEduExperienceForm.json" href="javascript:;" ka="user-resume-add-eduexp-r"  data-target="resume-education" class="link-add">添加</a></li>
                            <li><i class="fz-resume fz-socal"></i><span>社交账号</span><a data-url="/geek/getSocialContact.json" href="javascript:;" ka="user-resume-add-website-r"  data-target="resume-social" class="link-add">添加</a></li>
                        </ul>
                    </div>
                   <!-- <div class="btns"><a href="#" class="btn btn-download">下载电子简历</a><a href="#" class="btn btn-download">微信版本简历</a></div>-->
                </div>
            </div>
            <div class="resume">
                 <div class="update-time">最后更新 2017.09.02 01:15</div>
                <div class="resume-box">
                    <div class="resume-item" id="resume-userinfo">
                        <div class="item-primary">
                            <form upload-base64-url="/geek/upload/avatar64.json" upload="uploadURL=/user/upload/avatar/?c=uploadPortrit&amp;jsCallback=uploadOk" action="/geek/update/headImg.json" method="post">
                                <div class="profile_form zw_form figure">
                                    <dl class="clearfix avatar_line">
                                        <dd class="txt Rcheck avatar_box">
                                            <img src="https://img.bosszhipin.com/beijin/mcs/useravatar/20170902/dd0003d5152b71d86aad3d9c5cec91ac4803fa98821ddf90c0f803e1f8d40d8e_s.jpg" class="avatar">
                                            <div class="sel_avatar">
                                                <a ka="choose-avatar" data-title="头像设置" class="upload-layer"></a>
                                            </div>
                                            <input name="large" value="https://img.bosszhipin.com/beijin/mcs/useravatar/20170902/dd0003d5152b71d86aad3d9c5cec91ac4803fa98821ddf90c0f803e1f8d40d8e.jpg" type="hidden" class="kz_input required avatar_url" datatype="z" nullmsg="请上传头像！">
                                            <input name="tiny" value="https://img.bosszhipin.com/beijin/mcs/useravatar/20170902/dd0003d5152b71d86aad3d9c5cec91ac4803fa98821ddf90c0f803e1f8d40d8e_s.jpg" type="hidden" class="kz_input required avatar_url" datatype="z" nullmsg="请上传头像！">
                                        </dd>
                                    </dl>
                                </div>
                            </form>
                            <h2 class="name">袁博 <i class="fz-resume fz-male"></i><div class="op"><a data-url="/geek/user/info.json" href="javascript:;" ka="user-resume-edit-userinfo" class="link-edit" ><i class="fz-resume fz-edit"></i>编辑</a></div></h2>
                            <div class="info-labels">
                                <p class="row-base"><span class="label-text"><i class="fz-resume fz-experience"></i>5年工作经验</span><em class="vline"></em><span class="label-text"><i class="fz-resume fz-degree"></i>大专学历</span> <em class="vline"></em><span class="label-text"><i class="fz-resume fz-status"></i>离职-随时到岗</span></p>
                                <p class="row-contact"><span class="label-text"><i class="fz-resume fz-tel"></i>13175830076</span></p>
                            </div>
                        </div>
                        <div class="item-form"></div>
                    </div>
                    <div class="resume-item" id="resume-summary">
                        <div class="item-primary">
                            <h3 class="title">我的优势<div class="op"><a data-url="/geek/getUserDescForm.json" href="javascript:;" ka="user-resume-edit-desc" class="link-edit" ><i class="fz-resume fz-edit"></i>编辑</a></div></h3>
                            <div class="text">
                                <p>php网站设计</p>
                            </div>
                        </div>
                        <div class="item-form"></div>
                    </div>
                    <div class="resume-item" id="resume-purpose">
                        <div class="item-primary">
                            <h3 class="title">求职意向
                                <div class="op">
                                    <a data-url="/geek/getGeekExpectPositionForm.json" href="javascript:;" ka="user-resume-add-holpjob" class="link-add"><i class="fz-resume fz-add"></i>添加</a>
                                </div>
                            </h3>
                            
                            <div class="info-labels">
                            
                            <div id="row-65abe688af00d0e81nZ_39q_FVE-">
                                <span class="label-text"><i class="fz-resume fz-job"></i>PHP</span><em class="vline"></em><span class="label-text"><i class="fz-resume fz-salary"></i>5k-10k </span><em class="vline"></em><span class="label-text"><i class="fz-resume fz-industry"></i>不限</span><em class="vline"></em><span class="label-text"><i class="fz-resume fz-place"></i>重庆</span>
                                <div class="op">
                                    <a data-url="/geek/getGeekExpectPositionForm.json?id=65abe688af00d0e81nZ_39q_FVE~" href="javascript:;" ka="user-resume-edit-holpjob1" class="link-edit" ><i class="fz-resume fz-edit"></i>编辑</a>
                                    
                                </div>
                            </div>
                            
                            </div>
                        
                        </div>
                        <div class="item-form"></div>
                    </div>
                    <div class="resume-item" id="resume-history">
                        <div class="item-primary">
                            <h3 class="title">
                                工作经历
                                <div class="op">
                                    <a data-url="/geek/getWorkExperienceForm.json" href="javascript:;" ka="user-resume-add-workexp" class="link-add"><i class="fz-resume fz-add"></i>添加</a>
                                </div>
                            </h3>
                            <div class="history-project">
                            
                            
                            <div class="history-item" id="row-a1b4e27fbaefd6253nV73t-7EQ~~">
                                <div class="op">
                                   <a href="javascript:;" data-url="/geek/getWorkExperienceForm.json?id=a1b4e27fbaefd6253nV73t-7EQ~~"  ka="user-resume-edit-workexp1" class="link-edit"><i class="fz-resume fz-edit"></i>编辑</a>
                                    
                                </div>
                                <span class="period">2015.05-至今</span>
                                <h4 class="name">艾巴优教育</h4>
                                <div class="text">
                                    <h4>COO</h4>
                                    
                                    <div class="text">
                                        <h4>工作内容</h4>
                                        <p>项目运营管理工作</p>
                                    </div>
                                    
                                    
                                </div>
                                
                                <div class="text">
                                    <h4>
                                    
                                       <span>运营管理</span>
                                    
                                       <span>高级运营管理</span>
                                    
                                       <span>php</span>
                                    
                                    </h4>
                                </div>
                                
                            </div>
                            
                            
                        </div>
                        </div>
                        <div class="item-form"></div>
                    </div>
                    <div class="resume-item" id="resume-project">
                        <div class="item-primary">
                            <h3 class="title">项目经验
                                <div class="op">
                                    <a href="javascript:;" data-url="/geek/getGeekProjectExperienceForm.json" ka="user-resume-add-project" class="link-add"><i class="fz-resume fz-add"></i>添加</a>
                                </div>
                            </h3>
                            <div class="history-project">
                            
                        </div>
                        </div>
                        <div class="item-form"></div>
                    </div>
                    <div class="resume-item" id="resume-education">
                        <div class="item-primary">
                            <h3 class="title">教育经历
                                <div class="op">
                                    <a href="javascript:;" data-url="/geek/getEduExperienceForm.json"  ka="user-resume-add-eduexp" class="link-add"><i class="fz-resume fz-add"></i>添加</a>
                                </div>
                            </h3>
                            <div class="history-education">
                            
                            
                                 <div class="history-item" id="row-48f0e0dc756537b60HF_2Nm6FQ~~">
                                    <div class="op">
                                        <a href="javascript:;" data-url="/geek/getEduExperienceForm.json?id=48f0e0dc756537b60HF_2Nm6FQ~~"  ka="user-resume-edit-eduexp1" class="link-edit"><i class="fz-resume fz-edit"></i>编辑</a>
                                        
                                    </div>
                                    <span class="period">2011-2013</span>
                                    <h4 class="name">重庆三峡学院</h4>
                                    <div class="text">
                                        <h4>计算机科学与技术<em class="vline"></em>大专</h4>
                                        
                                    </div>
                                </div>
                            
                            
                            </div>
                        </div>
                        <div class="item-form"></div>
                    </div>
                    <div class="resume-item" id="resume-social">
                       <div class="item-primary">
                            <h3 class="title">社交账号
                                <div class="op">
                                    <a href="javascript:;" data-url="/geek/getSocialContact.json"  ka="user-resume-add-website" class="link-add"><i class="fz-resume fz-add"></i>添加</a>
                                </div>
                            </h3>
                            <div class="social-account">
                            
                            </div>
                        </div>
                    <div class="item-form"></div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!--简历预览-->
    <div id="pop-resume">
        <!--关闭按钮-->
        <div class="pop-resume-close">
            <img src="/v2/web/geek/images/pop-resume-close.png" ka="user-resume-pop-resume-close"/>
        </div>
        <!--正在上传-->
        <div class="pop-item pop-loading">
            <div class="content">
                <img src="/v2/web/geek/images/in_upload.png" class="resume-icon"/>
                <p class="text">正在上传中</p>
                <img src="/v2/web/geek/images/loading.gif" class="pop-loading-pic"/>
            </div>
            <div class="des">
                <h4>上传简历</h4>
                <div class="resume-title">王家卫-3年Java.doc</div>
                <p>附件简历将在投递后被Boss预览查看，请 确认显示正确</p>
            </div>
        </div>
        <!--上传成功 预览-->
        <div class="pop-item pop-success">
            <div class="content">
                <img src="" class="resume-pic"/>
            </div>
            <div class="des">
                <h4>上传简历</h4>
                <div class="resume-title">王家卫-3年Java.doc</div>
                <p>附件简历将在投递后被Boss预览查看，请 确认显示正确</p>
                <div class="btn btn-confim" ka="user-resume-save" >确定</div>
                <div class="btn btn-change" ka="user-resume-edit-upload" >更改附件简历</div>
            </div>
        </div>
        <!--上传失败-->
        <div class="pop-item pop-fail">
            <div class="content">
                <img src="/v2/web/geek/images/upload-fail.png" class="resume-icon"/>
                <div class="title upload-fail">上传失败</div>
                <p class="msg">请重新上传，如仍然无法成功，可尝试更改文件格式</p>
            </div>
            <div class="des">
                <h4>上传简历</h4>
                <div class="resume-title">王家卫-3年Java.doc</div>
                <p>附件简历将在投递后被Boss预览查看，请 确认显示正确</p>
                <div class="btn upload-again" ka="user-resume-upload-fail-reupload" >重新上传</div>
                <p>支持 doc、docx、pdf、jpg、png 格式</p>
            </div>
        </div>
        <!--预览失败-->
        <div class="pop-item preview-fail">
            <div class="content">
                <img src="/v2/web/geek/images/upload-fail.png" class="resume-icon"/>
                <div class="title preview-fail">预览失败</div>
                <div class="msg">点击<a href="javascript:;" class="preview-refresh" ka="user-resume-refresh" >刷新</a>重新预览</div>
                <img src="/v2/web/geek/images/loading.gif" class="resume-loading"/>
            </div>
            <div class="des">
                <h4>上传简历</h4>
                <div class="resume-title">王家卫-3年Java.doc</div>
                <p>附件简历将在投递后被Boss预览查看，请 确认显示正确</p>
                <div class="btn upload-again" ka="user-resume-preview-fail-reupload">重新上传</div>
                <p>支持 doc、docx、pdf、jpg、png 格式</p>
            </div>
        </div>
    </div>
    







<script src="./js/jquery-1.12.2.min.js"></script>
<script src="./js/main.js"></script>
</body>
<input type="hidden" id="page_key_name" value="cpc_user_resume" />


<script>
    function get_share_datas_from_html_inapp() {
        var shid = "shdefault",
            urlShid,
            urlSid,
            pk = "pkdefault",
            pp = "ppdefault",
            pkn = (typeof _PK != 'undefined' ? _PK : document.getElementById("page_key_name")),
            getQueryString = function(name) {
                var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"),
                    r = window.location.search.substr(1).match(reg);
                if (r != null) {
                    return unescape(r[2])
                }
                return null;
            };
        urlShid = getQueryString("shid");
        urlSid = getQueryString("sid");
        if (urlShid) {
            shid = urlShid;
        } else if (urlSid) {
            shid = urlSid;
        }
        if (pkn) {
            var pknVal = pkn.value;
            if (pknVal) {
                var pkArray = pknVal.split("|");
                if (pkArray.length == 1) {
                    pk = pkArray[0];
                } else if (pkArray.length >= 2) {
                    pk = pkArray[0];
                    pp = pkArray[1];
                }
            }
        }
        var ret = [];
        ret["shid"] = shid;
        ret["pk"] = pk;
        ret["pp"] = pp;
        return ret;
    }
    function getQueryString(name)
    {
        var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg);
        if(r!=null)return  unescape(r[2]); return null;
    }
</script>
<script>
    var _T = _T || [];
    (function() {
      var script = document.createElement("script");
      script.src = "/js/analytics/ka.js";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(script, s);
    })();
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?194df3105ad7148dcf2b98a91b5e727a";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
</html>