function LModal(name){
	this.className = name;
}
// 显示弹框
LModal.prototype.showModal = function(name){
	$(".modal_layer").show();
	$(name).show();
}
LModal.prototype.cancleModal = function(name){
	$(".modal_layer").hide();
	$(name).hide();
}