<?php 
	include 'header.php';
?>	 
	<!-- <table class="table table-bordered">
			<thead>
				  	<tr>
				  		<th>ID</th>
				  		<th>Tên</th>
				  		<th>Description</th>
				  		<th>Unit</th>
				  		<th>Semester</th>
				 		
				 
				  	</tr>	
				  </thead>
			<?php
				$SQLSELECT = "SELECT * FROM subject ";
				$result_set =  mysqli_query($conn,$SQLSELECT);
				while($row = mysqli_fetch_array($result_set,MYSQLI_ASSOC))
				{
				?>
			
					<tr>
						<td><?php echo $row['SUBJ_ID']; ?></td>
						<td><?php echo $row['SUBJ_CODE']; ?></td>
						<td><?php echo $row['SUBJ_DESCRIPTION']; ?></td>
						<td><?php echo $row['UNIT']; ?></td>
						<td><?php echo $row['SEMESTER']; ?></td>
					
	
					</tr>
				<?php
				}
			?>
		</table> -->
	<form name="aspnetForm" method="post" id="FORM_8">
	<div id="DIV_11">
		<table id="TABLE_12">
			<tbody id="TBODY_13">
				<tr id="TR_14">
					<td colspan="2" id="TD_15">
					</td>
				</tr>
				<tr id="TR_16">
					<td colspan="2" id="TD_17">
					</td>
				</tr>
				<tr id="TR_18">
					<td id="TD_19">
						<table id="TABLE_20">
							<tbody id="TBODY_21">
								<tr id="TR_22">
									<td id="TD_23">
									</td>
								</tr>
								<tr id="TR_24">
									<td id="TD_25">
										<table id="TABLE_26">
											<tbody id="TBODY_27">
												<tr id="TR_28">
													<td rowspan="2" id="TD_29">
														<img id="IMG_30" src="images/agribank.jpg" alt='' />
													</td>
													<td id="TD_31">
														 <strong id="STRONG_32">THÔNG TIN SẢN PHẨM DỊCH VỤ</strong>
													</td>
												</tr>
												<tr id="TR_33">
													<td id="TD_34">
														 <a id="A_35" href="nhap_lieu.php">Ngày:</a> <span id="SPAN_36"><strong id="STRONG_37"></strong></span> <strong id="STRONG_38"><span id="SPAN_39">11/05/2017</span></strong>
													</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
								<tr id="TR_40">
									<td id="TD_41">
										<table id="TABLE_42">
											<tbody id="TBODY_43">
												<tr id="TR_44">
													<td id="TD_45">
														<table id="TABLE_46">
															<tbody id="TBODY_47">
																<tr id="TR_48">
																	<td id="TD_49">
																	</td>
																</tr>
																<tr id="TR_50">
																	<td id="TD_51">
																		LÃI SUẤT HUY ĐỘNG TIỀN GỬI <span id="SPAN_52">VNĐ ĐỐI VỚI CÁ NHÂN</span>
																	</td>
																</tr>
																<tr id="TR_53">
																	<td id="TD_54">
																		<div id="DIV_55">
																			<table id="TABLE_56">
																				<tbody id="TBODY_57">
																					<tr id="TR_58">
																						<th id="TH_59">
																							STT
																						</th>
																						<th id="TH_60">
																							Kỳ hạn
																						</th>
																						<th id="TH_61">
																							Lãi suất năm
																						</th>
																						<th id="TH_62">
																							Lãi suất tháng
																						</th>
																					</tr>
																					<tr id="TR_63">
																						<td id="TD_64">
																							1
																						</td>
																						<td id="TD_65">
																							 <span id="SPAN_66">Tiền gửi không kỳ hạn</span>
																						</td>
																						<td id="TD_67">
																							 <span id="SPAN_68">0.40%</span>
																						</td>
																						<td id="TD_69">
																							 <span id="SPAN_70">0.0333%</span>
																						</td>
																					</tr>
																					<tr id="TR_71">
																						<td id="TD_72">
																							2
																						</td>
																						<td id="TD_73">
																							 <span id="SPAN_74">Tiền gửi có kỳ hạn 01 tuần</span>
																						</td>
																						<td id="TD_75">
																							 <span id="SPAN_76">0.50%</span>
																						</td>
																						<td id="TD_77">
																							 <span id="SPAN_78">0.0417%</span>
																						</td>
																					</tr>
																					<tr id="TR_79">
																						<td id="TD_80">
																							3
																						</td>
																						<td id="TD_81">
																							 <span id="SPAN_82">Tiền gửi có kỳ hạn 02 tuần</span>
																						</td>
																						<td id="TD_83">
																							 <span id="SPAN_84">0.50%</span>
																						</td>
																						<td id="TD_85">
																							 <span id="SPAN_86">0.0417%</span>
																						</td>
																					</tr>
																					<tr id="TR_87">
																						<td id="TD_88">
																							4
																						</td>
																						<td id="TD_89">
																							 <span id="SPAN_90">Tiền gửi có kỳ hạn 01 tháng</span>
																						</td>
																						<td id="TD_91">
																							 <span id="SPAN_92">4.20%</span>
																						</td>
																						<td id="TD_93">
																							 <span id="SPAN_94">0.3500%</span>
																						</td>
																					</tr>
																					<tr id="TR_95">
																						<td id="TD_96">
																							5
																						</td>
																						<td id="TD_97">
																							 <span id="SPAN_98">Tiền gửi có kỳ hạn 02 tháng</span>
																						</td>
																						<td id="TD_99">
																							 <span id="SPAN_100">4.30%</span>
																						</td>
																						<td id="TD_101">
																							 <span id="SPAN_102">0.3583%</span>
																						</td>
																					</tr>
																					<tr id="TR_103">
																						<td id="TD_104">
																							6
																						</td>
																						<td id="TD_105">
																							 <span id="SPAN_106">Tiền gửi có kỳ hạn 03 tháng</span>
																						</td>
																						<td id="TD_107">
																							 <span id="SPAN_108">4.80%</span>
																						</td>
																						<td id="TD_109">
																							 <span id="SPAN_110">0.4000%</span>
																						</td>
																					</tr>
																					<tr id="TR_111">
																						<td id="TD_112">
																							7
																						</td>
																						<td id="TD_113">
																							 <span id="SPAN_114">Tiền gửi có kỳ hạn 04 tháng</span>
																						</td>
																						<td id="TD_115">
																							 <span id="SPAN_116">4.80%</span>
																						</td>
																						<td id="TD_117">
																							 <span id="SPAN_118">0.4000%</span>
																						</td>
																					</tr>
																					<tr id="TR_119">
																						<td id="TD_120">
																							8
																						</td>
																						<td id="TD_121">
																							 <span id="SPAN_122">Tiền gửi có kỳ hạn 05 tháng</span>
																						</td>
																						<td id="TD_123">
																							 <span id="SPAN_124">5.00%</span>
																						</td>
																						<td id="TD_125">
																							 <span id="SPAN_126">0.4167%</span>
																						</td>
																					</tr>
																					<tr id="TR_127">
																						<td id="TD_128">
																							9
																						</td>
																						<td id="TD_129">
																							 <span id="SPAN_130">Tiền gửi có kỳ hạn 06 tháng</span>
																						</td>
																						<td id="TD_131">
																							 <span id="SPAN_132">5.30%</span>
																						</td>
																						<td id="TD_133">
																							 <span id="SPAN_134">0.4417%</span>
																						</td>
																					</tr>
																					<tr id="TR_135">
																						<td id="TD_136">
																							10
																						</td>
																						<td id="TD_137">
																							 <span id="SPAN_138">Tiền gửi có kỳ hạn 07 tháng</span>
																						</td>
																						<td id="TD_139">
																							 <span id="SPAN_140">5.30%</span>
																						</td>
																						<td id="TD_141">
																							 <span id="SPAN_142">0.4417%</span>
																						</td>
																					</tr>
																					<tr id="TR_143">
																						<td id="TD_144">
																							11
																						</td>
																						<td id="TD_145">
																							 <span id="SPAN_146">Tiền gửi có kỳ hạn 09 tháng</span>
																						</td>
																						<td id="TD_147">
																							 <span id="SPAN_148">5.50%</span>
																						</td>
																						<td id="TD_149">
																							 <span id="SPAN_150">0.4583%</span>
																						</td>
																					</tr>
																					<tr id="TR_151">
																						<td id="TD_152">
																							12
																						</td>
																						<td id="TD_153">
																							 <span id="SPAN_154">Tiền gửi có kỳ hạn 12 tháng</span>
																						</td>
																						<td id="TD_155">
																							 <span id="SPAN_156">6.50%</span>
																						</td>
																						<td id="TD_157">
																							 <span id="SPAN_158">0.5417%</span>
																						</td>
																					</tr>
																					<tr id="TR_159">
																						<td id="TD_160">
																							13
																						</td>
																						<td id="TD_161">
																							 <span id="SPAN_162">Tiền gửi có kỳ hạn 13 tháng</span>
																						</td>
																						<td id="TD_163">
																							 <span id="SPAN_164">6.50%</span>
																						</td>
																						<td id="TD_165">
																							 <span id="SPAN_166">0.5417%</span>
																						</td>
																					</tr>
																					<tr id="TR_167">
																						<td id="TD_168">
																							14
																						</td>
																						<td id="TD_169">
																							 <span id="SPAN_170">Tiền gửi có kỳ hạn 18 tháng</span>
																						</td>
																						<td id="TD_171">
																							 <span id="SPAN_172">6.50%</span>
																						</td>
																						<td id="TD_173">
																							 <span id="SPAN_174">0.5417%</span>
																						</td>
																					</tr>
																					<tr id="TR_175">
																						<td id="TD_176">
																							15
																						</td>
																						<td id="TD_177">
																							 <span id="SPAN_178">Tiền gửi có kỳ hạn 24 tháng</span>
																						</td>
																						<td id="TD_179">
																							 <span id="SPAN_180">6.50%</span>
																						</td>
																						<td id="TD_181">
																							 <span id="SPAN_182">0.5417%</span>
																						</td>
																					</tr>
																				</tbody>
																			</table>
																		</div>
																	</td>
																</tr>
																<tr id="TR_183">
																	<td id="TD_184">
																		<span id="SPAN_185"></span>
																	</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr>
											</tbody>
										</table>
										<script type="text/javascript" id="SCRIPT_186"><!--
		    function exec_refresh() {
		        //window.status = "Đang chuyển tới..." + myvar;
		        //myvar = myvar + " ."; 1000
		        var timerID = setTimeout("exec_refresh();", 8000);
		        if (timeout > 0) {
		            timeout -= 1;
		        }
		        else {
		            clearTimeout(timerID);
		            window.status = "";
		            window.location = "Lai_suat_TG_VND_TC.aspx";
		        }
		    }
		    //var myvar = "";
		    var timeout = 20;
		    exec_refresh();
		//-->
												</script>
											</td>
										</tr>
									</tbody>
								</table>
							</td>
							<td id="TD_187">
									<table id="TABLE_188">
										<tbody id="TBODY_189">
											<tr id="TR_190">
												<td id="TD_191">
													<table id="TABLE_192">
														<tbody id="TBODY_193">
															<tr id="TR_194">
																<td colspan="3" id="TD_195">
																	TỶ GIÁ VÀNG / NGOẠI TỆ
																</td>
															</tr>
															<tr id="TR_196">
																<td id="TD_197">
																	LOẠI
																</td>
																<td id="TD_198">
																	TỶ GIÁ MUA
																</td>
																<td id="TD_199">
																	TỶ GIÁ BÁN
																</td>
															</tr>
															<tr id="TR_200">
																<td id="TD_201">
																	 <span id="SPAN_202">VÀNG<br id="BR_203" /><br id="BR_204" />USD</span>
																</td>
																<td id="TD_205">
																	 <span id="SPAN_206">33,45<br id="BR_207" /><br id="BR_208" />22.247</span>
																</td>
																<td id="TD_209">
																	 <span id="SPAN_210">33,62<br id="BR_211" /><br id="BR_212" />22.275</span>
																</td>
															</tr>
														</tbody>
													</table>
												</td>
											</tr>
											<tr id="TR_213">
												<td id="TD_214">
													<table id="TABLE_215">
														<tbody id="TBODY_216">
															<tr id="TR_217">
																<td colspan="3" id="TD_218">
																	LÃI SUẤT TIỀN GỬI
																</td>
															</tr>
															<tr id="TR_219">
																<td id="TD_220">
																	KỲ HẠN
																</td>
																<td id="TD_221">
																	VNĐ/NĂM
																</td>
																<td id="TD_222">
																	USD/NĂM
																</td>
															</tr>
															<tr id="TR_223">
																<td id="TD_224">
																	<span id="SPAN_225"></span>
																	<marquee id="MARQUEE_226" direction="up" scrollamount="3" loop="INFINITE">
																		KKH<br id="BR_227" /><br id="BR_228" />01 TUẦN<br id="BR_229" /><br id="BR_230" />02 TUẦN<br id="BR_231" /><br id="BR_232" />01 THÁNG<br id="BR_233" /><br id="BR_234" />02 THÁNG<br id="BR_235" /><br id="BR_236" />03 THÁNG<br id="BR_237" /><br id="BR_238" />04 THÁNG<br id="BR_239" /><br id="BR_240" />05 THÁNG<br id="BR_241" /><br id="BR_242" />06 THÁNG<br id="BR_243" /><br id="BR_244" />07 THÁNG<br id="BR_245" /><br id="BR_246" />09 THÁNG<br id="BR_247" /><br id="BR_248" />12 THÁNG<br id="BR_249" /><br id="BR_250" />13 THÁNG<br id="BR_251" /><br id="BR_252" />18 THÁNG<br id="BR_253" /><br id="BR_254" />24 THÁNG
																	</marquee>
																</td>
																<td id="TD_255">
																	<span id="SPAN_256"></span>
																	<marquee id="MARQUEE_257" direction="up" scrollamount="3" loop="INFINITE">
																		0.40%<br id="BR_258" /><br id="BR_259" />0.50%<br id="BR_260" /><br id="BR_261" />0.50%<br id="BR_262" /><br id="BR_263" />4.20%<br id="BR_264" /><br id="BR_265" />4.30%<br id="BR_266" /><br id="BR_267" />4.80%<br id="BR_268" /><br id="BR_269" />4.80%<br id="BR_270" /><br id="BR_271" />5.00%<br id="BR_272" /><br id="BR_273" />5.30%<br id="BR_274" /><br id="BR_275" />5.30%<br id="BR_276" /><br id="BR_277" />5.50%<br id="BR_278" /><br id="BR_279" />6.50%<br id="BR_280" /><br id="BR_281" />6.50%<br id="BR_282" /><br id="BR_283" />6.50%<br id="BR_284" /><br id="BR_285" />6.50%
																	</marquee>
																</td>
																<td id="TD_286">
																	<span id="SPAN_287"></span>
																	<marquee id="MARQUEE_288" irection="up" scrollamount="3" loop="INFINITE">
																		0.00%<br id="BR_289" /><br id="BR_290" />---<br id="BR_291" /><br id="BR_292" />---<br id="BR_293" /><br id="BR_294" />0.00%<br id="BR_295" /><br id="BR_296" />0.00%<br id="BR_297" /><br id="BR_298" />0.00%<br id="BR_299" /><br id="BR_300" />---<br id="BR_301" /><br id="BR_302" />---<br id="BR_303" /><br id="BR_304" />0.00%<br id="BR_305" /><br id="BR_306" />---<br id="BR_307" /><br id="BR_308" />0.00%<br id="BR_309" /><br id="BR_310" />0.00%<br id="BR_311" /><br id="BR_312" />---<br id="BR_313" /><br id="BR_314" />0.00%<br id="BR_315" /><br id="BR_316" />0.00%
																	</marquee>
																</td>
															</tr>
														</tbody>
													</table>
												</td>
											</tr>
											<tr id="TR_317">
												<td id="TD_318">
													<table id="TABLE_319">
														<tbody id="TBODY_320">
															<tr id="TR_321">
																<td colspan="2" id="TD_322">
																	LÃI SUẤT TIỀN VAY
																</td>
															</tr>
															<tr id="TR_323">
																<td id="TD_324">
																	LOẠI VAY
																</td>
																<td id="TD_325">
																	LÃI SUẤT/NĂM
																</td>
															</tr>
															<tr id="TR_326">
																<td id="TD_327">
																	 <span id="SPAN_328">Ngắn hạn VNĐ<br id="BR_329" />Trung dài hạn VNĐ<br id="BR_330" />Cầm đồ<br id="BR_331" />USD</span>
																</td>
																<td id="TD_332">
																	 <span id="SPAN_333">7%-9.8%<br id="BR_334" />9.8%-11%<br id="BR_335" />11.5%<br id="BR_336" />4.5%-6.5%</span>
																</td>
															</tr>
														</tbody>
													</table>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
						</tr>
						<tr id="TR_337">
								<td colspan="2" id="TD_338">
									<span id="SPAN_339"></span>
									<marquee id="MARQUEE_340">
										Agribank tỉnh Bắc Giang thông báo Chương trình huy động Tiết kiệm dự thưởng chào mừng ngày Quốc tế lao động 1-5: - Thời gian huy động: từ ngày 20/04/2016 đến hết ngày 18/07/2016; - Ngày mở thưởng:Dự kiến quay số trúng thưởng lần 1 vào ngày 02/06/2016, lần 2 vào ngày 21/07/2016; - Địa điểm huy động: tất cảc các điểm giao dịch của Agribank; - Loại tiền huy động:VNĐ; - Cơ cấu giải thưởng: tổng giá trị giải thưởng 9.7 tỷ đồng. Bao gồm: + 02 giải Đặc biệt, mỗi giải 1 sổ tiết kiệm linh hoạt trị giá 1 tỷ đồng; + 10 giải Nhất, mỗi giải 1 sổ tiết kiệm linh hoạt trị giá 20 triệu đồng; + 25 giải Nhì, mỗi giải 1 sổ tiết kiệm linh hoạt trị giá 15 triệu đồng; + 50 giải Ba, mỗi giải 1 sổ tiết kiệm linh hoạt trị giá 10 triệu đồng; + 75 giải Tư, mỗi giải 1 sổ tiết kiệm linh hoạt trị giá 5 triệu đồng; + 12.500 giải Khuyến khích, mỗi giải 1 sổ tiết kiệm linh hoạt trị giá 0.5 triệu đồng; Kính mời Quý khách hàng tham gia gửi Tiết kiệm dự thưởng để có cơ hội trúng các giải thưởng của chương trình. Kính chúc Quý khách hàng gặp nhiều may mắn!
									</marquee>
								</td>
							</tr>
					</tbody>
				</table>
			</div>
		</form>
	</body>
</html>
