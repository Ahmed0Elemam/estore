</div>
<!---------------- Share ----------------->
<?php $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http ") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

<div class="ssk-sticky ssk-left ssk-center ssk-lg">
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $actual_link;  ?>" class="ssk ssk-facebook" title="شارك عبر الفيسبوك"></a>
    <a href="https://twitter.com/home?status=<?php echo $actual_link; ?>" class="ssk ssk-twitter" title="شارك عبر تويتر"></a>
    <a href="https://plus.google.com/share?url=<?php echo $actual_link; ?>" class="ssk ssk-google-plus" title="شارك عبر جوجل بلس"></a>
    <a href="mailto:?" class="ssk ssk-email" title="شارك عبر البريد الالكتروني"></a>
</div>
<script src="../js/social-share-kit.min.js"></script>


<script type="text/javascript">
    SocialShareKit.init();
</script>

<div id="footer">
    <a class="btn btn-success" href='http://www.dkwasc.com.eg'><i class="fa fa-home" aria-hidden="true"></i> الصفحة الرئيسية للشركة </a>
    <br />
    <br />
    <p>جميع الحقوق محفوظة © شركة مياه الشرب والصرف الصحي بالدقهلية 2020</p>
</div>
</div>
</body>

</html> 