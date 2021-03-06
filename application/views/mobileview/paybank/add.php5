	<svg class="svg-placeholder">
        <symbol id="my-icon" viewBox="0 0 64 64">
            <path d="M46.951,26.277H17.049c-1.684,0-3.049,1.209-3.049,2.7v18.6c0,1.491,1.365,2.7,3.049,2.7h29.901 c1.684,0,3.049-1.209,3.049-2.7v-18.6C50,27.486,48.635,26.277,46.951,26.277z M34.037,37.528v6.891 c0,1.125-0.912,2.037-2.037,2.037s-2.037-0.912-2.037-2.037v-6.891c-0.791-0.612-1.309-1.56-1.309-2.638 c0-1.848,1.498-3.346,3.346-3.346s3.346,1.498,3.346,3.346C35.346,35.968,34.828,36.916,34.037,37.528z"/>
            <path d="M46.048,32.291c-0.013,0-0.024,0-0.037,0c-0.827-0.02-1.482-0.707-1.464-1.535c0.002-0.085,0.143-8.591-4.477-13.316 c-2.041-2.088-4.769-3.147-8.106-3.147c-3.521,0-6.348,1.081-8.402,3.214c-4.244,4.404-4.019,11.846-4.016,11.92 c0.031,0.828-0.616,1.524-1.443,1.555c-0.846,0.022-1.524-0.616-1.555-1.443c-0.013-0.357-0.265-8.801,4.854-14.113 c2.643-2.742,6.196-4.132,10.563-4.132c4.181,0,7.634,1.367,10.262,4.062c5.503,5.643,5.33,15.077,5.32,15.476 C47.525,31.645,46.858,32.291,46.048,32.291z"/>
        </symbol>
    </svg>
    <div class="wrapper">
        <form class="cp-form">
            <div class="form-group">
                <div class="form-item">
                    <label>持卡人</label>
                    <span><?php echo "*".mb_substr($params['real_name'], 1)?></span>
                </div>
                <div class="form-item ipt-psw">
                    <label for="cardId">卡号</label>
                    <input id="cardId" type="tel" name="cardId" maxlength="19" placeholder="请输入卡号">
                </div>
            </div>
            <div class="btn-group">
                <p class="btn-group-tips">
                    <i class="icon"><svg><use xlink:href="#my-icon"/></svg></i>信息加密处理，仅用于银行验证
                </p>
                <button type="button" class="btn btn-confirm" disabled>下一步</button>
            </div>
        </form>
    </div>
   