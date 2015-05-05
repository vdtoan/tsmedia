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
$nhan_vien = 3;
$ten_cong_ty = 'mnssofts';
$giam_doc = 1;
$von = 10000;
$nam = 1 ;
$n_vien = 12;
$nam = 2;
$n_vien = 30;


/*
 * Bài tập 2:
 * Giả sử, nếu sau 1 năm, công ty phá sản và giải thể thì tất cả nhân sự đều bị sa thải,
 * số lương nhân viên và giám đốc sẽ bằng 0
 * Yêu cầu : hiển thị số lượng nhân sự sau khi phá sản
 */

/*
 * Bài tập 3:
 * Giả sử, nếu sau 1 năm thành lập, và số lượng nhân viên lớn hơn 30 nhân viên,
 * công ty sẽ chuyển đổi từ hình thức trách nhiệm hữu hạn sang cổ phần
 * Yêu cầu : hiển thị tên doanh nghiệp cùng hình thức doanh nghiệp và số lượng nhân viên
 */

/*
 * Bài tập 4:
 * Nếu sau 4 năm kể từ lúc chuyển đổi cổ phần , số lượng nhân viên nhiều hơn hoặc bằng 20,
 * và vốn doanh nghiêp ít hơn 20,000$ hoặc chỉ còn 1 cổ đông,
 * thì công ty sẽ bị giải thể.
 * Yêu cầu : Nếu doanh nghiệp bị giải thể, thì hiển thị tên doanh nghiẹp cùng với thông điệp giải thể,
 *           Nếu không giải thể thì hiển thị tất cả thông tin về doanh nghiệp.
 */
