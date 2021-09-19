function f(d) {
if (d == 'c') {
//Xoá bảng tính
document.getElementById('res').value = "";
return;
}
res = document.getElementById('res').value;
if (res == 0 && d == 0)
return;
if (d == '+' || d == '-' || d == '*' || d == '/') {
//Lưu dấu 
opr = d;
//Lưu số đầu
num = parseFloat(res);
document.getElementById('res').value = d;
return;
}
if (d == '=') {
num1 = parseFloat(res);
switch (opr) {
//Tính toán
case '+': ans = num + num1; break;
case '-': ans = num - num1; break;
case '*': ans = num * num1; break;
case '/': ans = parseInt(num / num1); break;
}
//Xuất kết quả ra bảng tính
document.getElementById('res').value = ans;
return;
}
if (d == '--') {
document.getElementById('res').value *= -1;
return;
}
if (!isNaN(document.getElementById('res').value))
document.getElementById('res').value += d;
else
document.getElementById('res').value = d;
}