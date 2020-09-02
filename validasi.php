<?php
$txtMonth	= isset($_POST['txtMonth']) ?  $_POST['txtMonth'] : '';
$txtYear 	= isset($_POST['txtYear']) ?  $_POST['txtYear'] : '';
$txtStatus	= isset($_POST['txtStatus']) ?  $_POST['txtStatus'] : '';

if (isset($_POST['btnHelpdesk'])) {
	echo "<meta http-equiv='refresh' content='0; url=?page=Helpdesk&month=" . $txtMonth . "&year=" . $txtYear . "'>";
}
if (isset($_POST['btnHelpdeskInternal'])) {
	echo "<meta http-equiv='refresh' content='0; url=?page=Helpdesk-Internal&month=" . $txtMonth . "&year=" . $txtYear . "'>";
}
if (isset($_POST['btnSales'])) {
	echo "<meta http-equiv='refresh' content='0; url=?page=Sales&month=" . $txtMonth . "&year=" . $txtYear . "'>";
}
if (isset($_POST['btnSalesChange'])) {
	echo "<meta http-equiv='refresh' content='0; url=?page=Sales-Change&month=" . $txtMonth . "&year=" . $txtYear . "'>";
}
if (isset($_POST['btnSalesQuotation'])) {
	echo "<meta http-equiv='refresh' content='0; url=?page=Sales-Quotation&month=" . $txtMonth . "&year=" . $txtYear . "'>";
}
if (isset($_POST['btnSalesClosing'])) {
	echo "<meta http-equiv='refresh' content='0; url=?page=Sales-Closing&month=" . $txtMonth . "&year=" . $txtYear . "'>";
}
if (isset($_POST['btnPurchase'])) {
	echo "<meta http-equiv='refresh' content='0; url=?page=Purchase&month=" . $txtMonth . "&year=" . $txtYear . "'>";
}
if (isset($_POST['btnPurchase02'])) {
	echo "<meta http-equiv='refresh' content='0; url=?page=Purchase-Report02&month=" . $txtMonth . "&year=" . $txtYear . "'>";
}
if (isset($_POST['btnPurchaseCash'])) {
	echo "<meta http-equiv='refresh' content='0; url=?page=Purchase-Cash&month=" . $txtMonth . "&year=" . $txtYear . "'>";
}
if (isset($_POST['btnPurchaseRFQ'])) {
	echo "<meta http-equiv='refresh' content='0; url=?page=Purchase-RFQ&month=" . $txtMonth . "&year=" . $txtYear . "'>";
}
if (isset($_POST['btnPurchaseRequest'])) {
	echo "<meta http-equiv='refresh' content='0; url=?page=Purchase-Request&month=" . $txtMonth . "&year=" . $txtYear . "'>";
}
if (isset($_POST['btnPurchaseReceive'])) {
	echo "<meta http-equiv='refresh' content='0; url=?page=Purchase-Receive&month=" . $txtMonth . "&year=" . $txtYear . "'>";
}
if (isset($_POST['btnRequest'])) {
	echo "<meta http-equiv='refresh' content='0; url=?page=Request&month=" . $txtMonth . "&year=" . $txtYear . "'>";
}
if (isset($_POST['btnWorkOrder'])) {
	echo "<meta http-equiv='refresh' content='0; url=?page=Work-Order&month=" . $txtMonth . "&year=" . $txtYear . "'>";
}
if (isset($_POST['btnMaterialOrder'])) {
	echo "<meta http-equiv='refresh' content='0; url=?page=Material-Order&month=" . $txtMonth . "&year=" . $txtYear . "'>";
}
if (isset($_POST['btnAcceptanceOrder'])) {
	echo "<meta http-equiv='refresh' content='0; url=?page=Acceptance-Order&month=" . $txtMonth . "&year=" . $txtYear . "'>";
}
if (isset($_POST['btnDeliveryInstruction'])) {
	echo "<meta http-equiv='refresh' content='0; url=?page=Delivery-Instruction&month=" . $txtMonth . "&year=" . $txtYear . "'>";
}
if (isset($_POST['btnDeliveryInstructionList'])) {
	echo "<meta http-equiv='refresh' content='0; url=?page=Delivery-Instruction-List&month=" . $txtMonth . "&year=" . $txtYear . "'>";
}
if (isset($_POST['btnDeliveryOrder'])) {
	echo "<meta http-equiv='refresh' content='0; url=?page=Delivery-Order&month=" . $txtMonth . "&year=" . $txtYear . "'>";
}
if (isset($_POST['btnStockOrder'])) {
	echo "<meta http-equiv='refresh' content='0; url=?page=Stock-Order&month=" . $txtMonth . "&year=" . $txtYear . "&status=" . $txtStatus . "'>";
}
if (isset($_POST['btnStockRequest'])) {
	echo "<meta http-equiv='refresh' content='0; url=?page=Stock-Request&month=" . $txtMonth . "&year=" . $txtYear . "&status=" . $txtStatus . "'>";
}
if (isset($_POST['btnStockReceive'])) {
	echo "<meta http-equiv='refresh' content='0; url=?page=Stock-Receive&month=" . $txtMonth . "&year=" . $txtYear . "&status=" . $txtStatus . "'>";
}
if (isset($_POST['btnBilling'])) {
	echo "<meta http-equiv='refresh' content='0; url=?page=Billing&month=" . $txtMonth . "&year=" . $txtYear . "'>";
}
if (isset($_POST['btnReceive'])) {
	echo "<meta http-equiv='refresh' content='0; url=?page=Receive&month=" . $txtMonth . "&year=" . $txtYear . "'>";
}
if (isset($_POST['btnReceiveInvoice'])) {
	echo "<meta http-equiv='refresh' content='0; url=?page=Receive-Invoice&month=" . $txtMonth . "&year=" . $txtYear . "'>";
}
