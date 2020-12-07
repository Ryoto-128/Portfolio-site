<?php get_header(); ?>
<div id="page">
    <div id="contact">
        <h2 class="title">Contact</h2>
        <div class="introduction">
            <p>
                ご連絡は、お問い合わせフォームまたわメールアドレスよりお受けしております。<br>
                お気軽にご連絡下さい。お待ちしております。
            </p>
        </div>
        <div class="profile">
            <div class="detail">
                <h3>Contact information / 連絡先</h3>
                <table>
                    <tbody>
                        <tr>
                            <th>E-mail</th>
                            <td>ryoto6ki@gmail.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="social">
            <div class="detail">
                <h3>Social / ソーシャル</h3>
                <table>
                    <tbody>
                        <tr>
                            <th>FaceBook</th>
                            <td><a>facebook.com/engr.ryoto/</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="form">
            <div class="detail">
                <h3>Form / お問い合わせフォーム</h3>
                <div class="input_form">
                    <?php echo do_shortcode('[contact-form-7 id="106" title="Contact"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>