<?php
/*
 * Một công ty trách nhiệm hữu hạn mang tên Mmssofts có 1 giám đốc và 3 nhân viên với vốn ban đầu là 10,000$
 * Sau 1 năm, công ty đã tăng lên 12 nhân viên, và sau 2 năm đã tăng lên 30 nhân viên,
 * Khi thời điểm đén, giám đốc công ty quyết định chuyển đổi hình thức công ty thành cổ phần với 3 cổ đông,
 * Sau 4 năm kể từ lúc chuyển đổi cổ phần, công ty đã có thêm 100 nhân viên.  
 */

/*
 * Bài tập 1:
 * Phân tích các biến số và hăng số,
 * Khởi tạo và gán giá trị tương ứng với đề bài 
 */
$nhan_vien = 3 ;
$nhan_vien = 30;
$nhan_vien = 100;
$nam = 1;
$nam = 2;
$nam = 4;
$co_phan;
$hinh_thuc_cong_ty = "tnhh";
$hinh_thuc_cong_ty = "co_phan";
define('VON_BAN_DAU',10000);

 
/*
 * Bài tập 2:
 * Giả sử, nếu sau 1 năm, công ty phá sản và giải thể thì tất cả nhân sự đều bị sa thải,
 * số lương nhân viên và giám đốc sẽ bằng 0
 * Yêu cầu : hiển thị số lượng nhân sự sau khi phá sản
 */
                            
if($nam == 1) {
	$nhan_vien = 0;
	$giam_doc = 0;
}
 
 
 
 */

/*
 * Bài tập 3:
 * Giả sử, nếu sau 1 năm thành lập, và số lượng nhân viên lớn hơn 30 nhân viên,
 * công ty sẽ chuyển đổi từ hình thức trách nhiệm hữu hạn sang cổ phần
 * Yêu cầu : hiển thị tên doanh nghiệp cùng hình thức doanh nghiệp và số lượng nhân viên
 */

	if ($nam == 1 && $nhan_vien > 30) {
		$cong_ty = 'co_phan';
	}
/*
 * Bài tập 4:
 * Nếu sau 4 năm kể từ lúc chuyển đổi cổ phần , số lượng nhân viên nhiều hơn hoặc bằng 20,
 * và vốn doanh nghiêp ít hơn 20,000$ hoặc chỉ còn 1 cổ đông,
 * thì công ty sẽ bị giải thể.
 * Yêu cầu : Nếu doanh nghiệp bị giải thể, thì hiển thị tên doanh nghiẹp cùng với thông điệp giải thể,
 *           Nếu không giải thể thì hiển thị tất cả thông tin về doanh nghiệp.
 */
 
	if ($nam > 4 && $hinh_thuc_cong_ty == 'co_phan' && $nhan_vien >= 20 && $von < 20000 || $co_dong == 1) {
		$cong_ty = 'giai the ';
	}
	

