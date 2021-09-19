function sc() {
rng = prompt('Enter the range');
//Hiện thông báo nhập giá trị
res = rng.split("-");
//Cắt chuỗi
if (res.length != 2) {
alert("invalid range ");
return;
}
first = parseInt(res[0]);
//Lấy số đầu
second = parseInt(res[1]);
//Lấy số đầu
if (first > second) {
alert("invalid range ");
//So sánh kiểm tra lỗi, xuất thông báo
return;
}
str = "<table border=2><tr><th>Number</th><th>Square</th><th>Cube</th></tr>";
for (i = first; i <= second; i++) {
str = str + "<tr><td>" + i + "<td>" + (i * i) + "<td>" + (i * i * i);
//Xuất bình phương, lập phương từ số đầu đến cuối
}
document.write(str);
}