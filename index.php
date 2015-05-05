<?php
/*
 * Một công ty trách nhiệm hữu hạn mang tên Mmssofts có 1 giám đốc và 3 nhân viên với vốn ban đầu là 10,000$
 * Sau 1 năm, công ty đã tăng lên 12 nhân viên, và sau 2 năm đã tăng lên 30 nhân viên,
 * Khi thời điểm đén, giám đốc công ty quyết định chuyển đổi hình thức công ty thành cổ phần với 3 cổ đông,
 * Sau 4 năm kể từ lúc chuyển đổi cổ phần, công ty đã có thêm 100 nhân viên
 */

    /*
     * Bài tập 1:
     * Phân tích các biến số và hăng số,
     * Khởi tạo và gán giá trị tương ứng với đề bài 
     */
    
    /* 
     * ----------------------
     * Bắt đầu giải bài tập 1
     */
    
    /*
     * Bước 1: Phân tích chung các cụm từ tìm năng :
     * 1. công ty trách nhiệm hữu hạn
     * 2. cty tên Mmssofts
     * 3. 1 giám đốc
     * 4. 3 nhân viên
     * 5. vốn ban đầu là 10,000$
     * 6. 1 năm
     * 7. 12 nhân viên
     * 8. 2 năm
     * 9. 30 nhân viên
     * 10. công ty cổ phần
     * 11. 3 cổ đông
     * 12. 4 năm
     * 13. 100 nhân viên
     */
    
    /*
     * Bước 2: Nhóm các cụm từ tìm năng lại với nhau, các cụm từ này có các danh từ chung, nhưng tính chất sở hữu thì riêng biệt
     * 1. công ty trách nhiệm hữu hạn, công ty cổ phần
     * 2. cty tên Mmssofts
     * 3. 1 giám đốc
     * 4. 3 nhân viên, 12 nhân viên, 30 nhân viên, 100 nhân viên
     * 5. vốn ban đầu là 10,000
     * 6. tiền tệ là dollar (không thay đổi)
     * 7. 1 năm, 2 năm, 4 năm
     * 8. 3 cổ đông
     */
    
    /*
     * Bước 3: Qui ước tên gọi và giá trị của nó:
     * 1. Hình thức công ty = trách nhiệm hữu hạn, cổ phần
     * 2. Tên công ty = Mmssofts
     * 3. Giám đốc = 1
     * 4. Nhân viên = 3, 12, 3, 100
     * 5. Vốn = 10000
     * 6. tiền tệ = $ (không thay đổi)
     * 7. năm hoạt động = 1, 2 , có thể lớn hơn 4
     */
    
    /*
     * Bước 4: Phân tích chuỗi sự kiện
     * 1. Một công ty trách nhiệm hữu hạn mang tên Mmssofts có 1 giám đốc và 3 nhân viên với vốn ban đầu là 10,000$
     * 2. Sau 1 năm, công ty đã tăng lên 12 nhân viên, và sau 2 năm đã tăng lên 30 nhân viên
     * 3. Khi thời điểm đén, giám đốc công ty quyết định chuyển đổi hình thức công ty thành cổ phần với 3 cổ đông
     * 4. Sau 4 năm kể từ lúc chuyển đổi cổ phần, công ty đã có thêm 100 nhân viên
     */
    
    /*
     * Bước 5: Khởi tạo và khai báo biến, hằng số ứng với chuỗi sự kiện ban đầu (sự kiên 1 ở Bước 4)
     */

    // khai báo biến số
    $hinh_thuc_cty = 'trách nhiệm hữu hạn';
    $ten_cty = 'Mmssofts';
    $giam_doc = 1;
    $nhan_vien = 3;
    $von = 100000;
    $nam_hoat_dong = 1;
    
    // khai báo hằng số
    define('TIEN_TE', '$');

    /*
     * Kết thúc giải bài tập 1
     * ----------------------
     */
    
    /*
     * Bài tập 2:
     * Giả sử, nếu sau 1 năm, công ty phá sản và giải thể thì tất cả nhân sự đều bị sa thải,
     * số lương nhân viên và giám đốc sẽ bằng 0
     * Yêu cầu : hiển thị số lượng nhân sự sau khi phá sản
     */
    
    /*
     * ----------------------
     * Bắt đầu giải bài tập 2
     */
    
    /*
     * Phân tích tình huống:
     * giả sử đồng nghia với tính chất tạm thời
     * phá sản đồng nghĩa với việc công ty không còn vốn,
     * và hành động giải thể đồng nghĩa với việc tất cả nhân sự đều bị sa thải,
     *
     * Pseudocode - diễn tả tình huống để chuẩn bị viết code  :
     * Gán giá trị 0 cho biến số $von,
     * Nếu vốn của công ty bé hơn hoặc bằng không, 
     * thì tất cả nhân sự sẽ bị xoá bỏ 
     * Sau khi thoát khỏi điều kiện, gán giá trị ban đầu 10000 cho biến số $von
     */
    $von = 0;
    if ($von <= 0) {
        $giam_doc = 0;
        $nhan_vien = 0;
        echo 'số lượng nhân sự sau khi phá sản = ' . $nhan_vien;
    }
    $von = 10000;
    /*
     * Kết thúc giải bài tập 2
     * ----------------------
     */
        
    /*
     * Bài tập 3:
     * Giả sử, nếu sau 1 năm thành lập, và số lượng nhân viên lớn hơn 30 nhân viên,
     * công ty sẽ chuyển đổi từ hình thức trách nhiệm hữu hạn sang cổ phần
     * Yêu cầu : hiển thị tên doanh nghiệp cùng hình thức doanh nghiệp và số lượng nhân viên
     */
    
    //@TODO : phân tích tình huống, Pseudocode, code 
        
    /*
     * Bài tập 4:
     * Nếu sau 4 năm kể từ lúc chuyển đổi cổ phần , số lượng nhân viên nhiều hơn hoặc bằng 20,
     * và vốn doanh nghiêp ít hơn 20,000$ hoặc chỉ còn 1 cổ đông,
     * thì công ty sẽ bị giải thể.
     * Yêu cầu : Nếu doanh nghiệp bị giải thể, thì hiển thị tên doanh nghiẹp cùng với thông điệp giải thể,
     *           Nếu không giải thể thì hiển thị tất cả thông tin về doanh nghiệp.
     */
    
    //@TODO : phân tích tình huống, Pseudocode, code
