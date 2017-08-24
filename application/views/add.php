<div class="container-fluid">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
		 <form class="form-horizontal">
            <fieldset>
                <!-- Address form -->
         
                <h2>사원정보입력</h2>
         
                <!-- full-name input-->
                <div class="control-group">
                    <label class="control-label">이름</label>
                    <div class="controls">
                        <input id="full-name" name="full-name" type="text" placeholder="이름을 입력하세요"
                        class="input-xlarge">
                        <p class="help-block">로그인시 아이디(이름)가 됩니다.</p>
                    </div>
                </div>
                <!-- address-line1 input-->
                <div class="control-group">
                    <label class="control-label">주소</label>
                    <div class="controls">
                        <input id="address-line1" name="address-line1" type="text" placeholder="시/군까지만 입력"
                        class="input-xlarge">
                        <p class="help-block"></p>
                    </div>
                </div>
                <!-- address-line2 input-->
                 <div class="control-group">
                    <label class="control-label">부서</label>
                    <div class="controls">
                        <select id="division" name="division" class="input-xlarge">
                            <option value="" selected="selected">(부서를 선택해주세요.)</option>
                            <option value="dev">개발</option>
                            <option value="mk">마케팅</option>
                            <option value="fn">재무</option>
                            <option value="hr">인사</option>
                            <option value="bz">영업</option>
                            <option value="de">디자인</option>
                            
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">직책</label>
                    <div class="controls">
                        <input id="level" name="level" type="text" placeholder="직책을 입력하세요"
                        class="input-xlarge">
                        <p class="help-block"></p>
                    </div>
                </div>
                <!-- city input-->
                <div class="control-group">
                    <label class="control-label">입사일</label>
                    <div class="controls">
                        <input id="comein" name="comein" type="text" placeholder="입사날짜" class="input-xlarge">
                        <p class="help-block"></p>
                    </div>
                </div>
                <!-- region input-->
                <div class="control-group">
                    <label class="control-label">재직정보</label>
                    <div class="controls">
                        <input id="status" name="status" type="text" placeholder="재직중/퇴사"
                        class="input-xlarge">
                        <p class="help-block"></p>
                    </div>
                </div>
                <!-- postal-code input-->
                <div class="control-group">
                    <label class="control-label">사진</label>
                    <div class="controls">
                        <input id="faceimage" name="faceimage" type="file"
                        class="input-xlarge">
                        <p class="help-block"></p>
                    </div>
                </div>
                <!-- country select -->
                <div class="control-group">
               <input type="submit" id="submit" class="form-control btn btn-success" value="등록" style="width:100%;">
                </div>
            </fieldset>
        </form>
	</div>
	<div class="col-sm-3"></div>
</div>