<?php
/*
 * Bài tập 1: cho một dãy số gồm 10 chữ số
 * 
 * Yêu cầu:
 * dùng cả 3 vòng lặp, while, do...while và for để hiển thị kết quả của dăy số,
 * các chữ số trong dãy số phải được ngăn cách ra, 
 * chữ số đầu tiên không được có khoảng trắng ở đầu hàng,
 * và chữ số cuối cùng không được có khoảng trắng ở cuối hàng
 * 
 * Kết quả mong đợi: (Không bao gồm dấu ngoặc vuông [ ])
 * [0 1 2 3 4 5 6 7 8 9] 
 */

/*
 * Bài tập 2: cho một dãy số gồm 30 chữ số,
 * 
 * Yêu cầu:
 * dùng cả 3 vòng lặp, while, do...while và for để hiển thị các số hạng chia hết cho 5 nhưng không phải số 0
 * các chữ số trong dãy số phải được ngăn cách ra,
 * chữ số đầu tiên không được có khoảng trắng ở đầu hàng,
 * và chữ số cuối cùng không được có khoảng trắng ở cuối hàng
 *
 * Gợi ý:
 * Trong php, các toán tử sau đây sẽ được áp dụng:
 * một số hạng a CỘNG cho số hạng b: $a + $b
 * một số hạng a TRỪ cho số hạng b: $a - $b
 * một số hạng a NHÂN cho số hạng b: $a * $b
 * một số hạng a CHIA cho số hạng b: $a / $b
 * một số hạng a CHIA SỐ DƯ cho số hạng b: $a % $b
 *              nếu gán giá trị $a = 4 và $b = 2, thì 4 chia cho 2 có số dư bắng 0,
 *              vậy khi chia số dư $a % $b thì kết quả sẽ được trả về là 0
 *         hoặc nếu gán giá trị $a = 5 và $b = 2, thì 5 chia cho 2 có số dư bắng 1
 *         
 * Kết quả mong đợi: (Không bao gồm dấu ngoặc vuông [ ])
 * [5 10 15 20 25 30]
 */
 

/*
 * Bài tập 3: cho ký tự *,
 *
 * Yêu cầu:
 * dùng cả 3 vòng lặp, while, do...while và for để hiển thị hình dáng như bên dưới
 * 
 *             *
 *             **
 *             ***
 *             ****
 *             *****
 * Gợi ý:
 * dùng thẻ <br/> để xuống hàng (tạo hàng mới) khi hiển thị chuổi trong php
 * vd : muốn hiển thị 
 *                      Vũ 
 *                      Đình 
 *                      Toàn
 *       sử dụng cú pháp echo 'Vũ <br/> Đình <br/>Toàn';                    
 */