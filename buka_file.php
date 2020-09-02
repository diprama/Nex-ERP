<?php


# KONTROL MENU PROGRAM
if ($_GET) {
	// Jika mendapatkan variabel URL ?page
	switch ($_GET['page']) {
		case '':
			if (!file_exists("login.php")) die("Empty Main Page!");
			include "login.php";
			break;

		case 'Main':
			if (!file_exists("main.php")) die("Sorry Empty Page!");
			include "main.php";
			break;
		case 'Dashboard-Helpdesk':
			if (!file_exists("dashboard_helpdesk.php")) die("Sorry Empty Page!");
			include "dashboard_helpdesk.php";
			break;
		case 'Dashboard-User':
			if (!file_exists("dashboard_user.php")) die("Sorry Empty Page!");
			include "dashboard_user.php";
			break;

		case 'Login':
			if (!file_exists("login.php")) die("Sorry Empty Page!");
			include "login.php";
			break;
		case 'Login-Validasi':
			if (!file_exists("login_validasi.php")) die("Sorry Empty Page!");
			include "login_validasi.php";
			break;
		case 'Logout':
			if (!file_exists("login_out.php")) die("Sorry Empty Page!");
			include "login_out.php";
			break;
		case 'Login-Failed':
			if (!file_exists("login_failed.php")) die("Sorry Empty Page!");
			include "login_failed.php";
			break;
		case 'Help':
			if (!file_exists("help.php")) die("Sorry Empty Page!");
			include "help.php";
			break;
		case 'Setting':
			if (!file_exists("setting.php")) die("Sorry Empty Page!");
			include "setting.php";
			break;
		case 'Profile':
			if (!file_exists("profile.php")) die("Sorry Empty Page!");
			include "profile.php";
			break;
		case 'Test':
			if (!file_exists("test.php")) die("Sorry Empty Page!");
			include "test.php";
			break;
		case 'Validasi':
			if (!file_exists("validasi.php")) die("Sorry Empty Page!");
			include "validasi.php";
			break;

			# USER LOGIN 
		case 'User':
			if (!file_exists("user.php")) die("Sorry Empty Page!");
			include "user.php";
			break;
		case 'User-Add':
			if (!file_exists("user_add.php")) die("Sorry Empty Page!");
			include "user_add.php";
			break;
		case 'User-Delete':
			if (!file_exists("user_delete.php")) die("Sorry Empty Page!");
			include "user_delete.php";
			break;
		case 'User-Edit':
			if (!file_exists("user_edit.php")) die("Sorry Empty Page!");
			include "user_edit.php";
			break;
		case 'User-Log':
			if (!file_exists("user_log.php")) die("Sorry Empty Page!");
			include "user_log.php";
			break;

			# EMPLOYEE 
		case 'Employee':
			if (!file_exists("employee.php")) die("Sorry Empty Page!");
			include "employee.php";
			break;
		case 'Employee-Add':
			if (!file_exists("employee_add.php")) die("Sorry Empty Page!");
			include "employee_add.php";
			break;
		case 'Employee-Delete':
			if (!file_exists("employee_delete.php")) die("Sorry Empty Page!");
			include "employee_delete.php";
			break;
		case 'Employee-Edit':
			if (!file_exists("employee_edit.php")) die("Sorry Empty Page!");
			include "employee_edit.php";
			break;
		case 'Employee-Bank':
			if (!file_exists("employee_bank.php")) die("Sorry Empty Page!");
			include "employee_bank.php";
			break;
		case 'Employee-Bank-Add':
			if (!file_exists("employee_bank_add.php")) die("Sorry Empty Page!");
			include "employee_bank_add.php";
			break;
		case 'Employee-Bank-Delete':
			if (!file_exists("employee_bank_delete.php")) die("Sorry Empty Page!");
			include "employee_bank_delete.php";
			break;
		case 'Employee-Bank-Edit':
			if (!file_exists("employee_bank_edit.php")) die("Sorry Empty Page!");
			include "employee_bank_edit.php";
			break;

			# MASTER ==================================================================

			# MASTER TODOLIST
		case 'Todolist':
			if (!file_exists("todolist.php")) die("Sorry Empty Page!");
			include "todolist.php";
			break;

			# MASTER STATUS
		case 'Status':
			if (!file_exists("status.php")) die("Sorry Empty Page!");
			include "status.php";
			break;
		case 'Status-Add':
			if (!file_exists("status_add.php")) die("Sorry Empty Page!");
			include "status_add.php";
			break;
		case 'Status-Delete':
			if (!file_exists("status_delete.php")) die("Sorry Empty Page!");
			include "status_delete.php";
			break;
		case 'Status-Edit':
			if (!file_exists("status_edit.php")) die("Sorry Empty Page!");
			include "status_edit.php";
			break;

			# MASTER ORGANIZATION
		case 'Organization':
			if (!file_exists("organization.php")) die("Sorry Empty Page!");
			include "organization.php";
			break;
		case 'Organization-Add':
			if (!file_exists("organization_add.php")) die("Sorry Empty Page!");
			include "organization_add.php";
			break;
		case 'Organization-Delete':
			if (!file_exists("organization_delete.php")) die("Sorry Empty Page!");
			include "organization_delete.php";
			break;
		case 'Organization-Edit':
			if (!file_exists("organization_edit.php")) die("Sorry Empty Page!");
			include "organization_edit.php";
			break;

			# MASTER CODE
		case 'Code':
			if (!file_exists("code.php")) die("Sorry Empty Page!");
			include "code.php";
			break;
		case 'Code-Add':
			if (!file_exists("code_add.php")) die("Sorry Empty Page!");
			include "code_add.php";
			break;
		case 'Code-Delete':
			if (!file_exists("code_delete.php")) die("Sorry Empty Page!");
			include "code_delete.php";
			break;
		case 'Code-Edit':
			if (!file_exists("code_edit.php")) die("Sorry Empty Page!");
			include "code_edit.php";
			break;

			# MASTER MENU
		case 'Menu':
			if (!file_exists("menu.php")) die("Sorry Empty Page!");
			include "menu.php";
			break;
		case 'Menu-Add':
			if (!file_exists("menu_add.php")) die("Sorry Empty Page!");
			include "menu_add.php";
			break;
		case 'Menu-Delete':
			if (!file_exists("menu_delete.php")) die("Sorry Empty Page!");
			include "menu_delete.php";
			break;
		case 'Menu-Edit':
			if (!file_exists("menu_edit.php")) die("Sorry Empty Page!");
			include "menu_edit.php";
			break;


			# MASTER COMPANY
		case 'Company':
			if (!file_exists("company.php")) die("Sorry Empty Page!");
			include "company.php";
			break;
		case 'Company-Add':
			if (!file_exists("company_add.php")) die("Sorry Empty Page!");
			include "company_add.php";
			break;
		case 'Company-Delete':
			if (!file_exists("company_delete.php")) die("Sorry Empty Page!");
			include "company_delete.php";
			break;
		case 'Company-Edit':
			if (!file_exists("company_edit.php")) die("Sorry Empty Page!");
			include "company_edit.php";
			break;

			# MASTER COMPANY
		case 'Branch':
			if (!file_exists("branch.php")) die("Sorry Empty Page!");
			include "branch.php";
			break;
		case 'Branch-Add':
			if (!file_exists("branch_add.php")) die("Sorry Empty Page!");
			include "branch_add.php";
			break;
		case 'Branch-Delete':
			if (!file_exists("branch_delete.php")) die("Sorry Empty Page!");
			include "branch_delete.php";
			break;
		case 'Branch-Edit':
			if (!file_exists("branch_edit.php")) die("Sorry Empty Page!");
			include "branch_edit.php";
			break;

			# MASTER SUPPLIER
		case 'Supplier':
			if (!file_exists("supplier.php")) die("Sorry Empty Page!");
			include "supplier.php";
			break;
		case 'Supplier-Add':
			if (!file_exists("supplier_add.php")) die("Sorry Empty Page!");
			include "supplier_add.php";
			break;
		case 'Supplier-Delete':
			if (!file_exists("supplier_delete.php")) die("Sorry Empty Page!");
			include "supplier_delete.php";
			break;
		case 'Supplier-Edit':
			if (!file_exists("supplier_edit.php")) die("Sorry Empty Page!");
			include "supplier_edit.php";
			break;
		case 'Supplier-Category':
			if (!file_exists("supplier_category.php")) die("Sorry Empty Page!");
			include "supplier_category.php";
			break;
		case 'Supplier-Category-Add':
			if (!file_exists("supplier_category_add.php")) die("Sorry Empty Page!");
			include "supplier_category_add.php";
			break;
		case 'Supplier-Category-Delete':
			if (!file_exists("supplier_category_delete.php")) die("Sorry Empty Page!");
			include "supplier_category_delete.php";
			break;
		case 'Supplier-Category-Edit':
			if (!file_exists("supplier_category_edit.php")) die("Sorry Empty Page!");
			include "supplier_category_edit.php";
			break;
		case 'Supplier-Files':
			if (!file_exists("supplier_files.php")) die("Sorry Empty Page!");
			include "supplier_files.php";
			break;
		case 'Supplier-Files-Add':
			if (!file_exists("supplier_files_add.php")) die("Sorry Empty Page!");
			include "supplier_files_add.php";
			break;
		case 'Supplier-Files-Delete':
			if (!file_exists("supplier_files_delete.php")) die("Sorry Empty Page!");
			include "supplier_files_delete.php";
			break;
		case 'Supplier-Files-Edit':
			if (!file_exists("supplier_files_edit.php")) die("Sorry Empty Page!");
			include "supplier_files_edit.php";
			break;
		case 'Supplier-Selection':
			if (!file_exists("supplier_selection.php")) die("Sorry Empty Page!");
			include "supplier_selection.php";
			break;
		case 'Supplier-Selection-Add':
			if (!file_exists("supplier_selection_add.php")) die("Sorry Empty Page!");
			include "supplier_selection_add.php";
			break;
		case 'Supplier-Selection-Edit':
			if (!file_exists("supplier_selection_edit.php")) die("Sorry Empty Page!");
			include "supplier_selection_edit.php";
			break;
		case 'Supplier-Selection-Detail':
			if (!file_exists("supplier_selection_detail.php")) die("Sorry Empty Page!");
			include "supplier_selection_detail.php";
			break;
		case 'Supplier-Selection-Detail-Delete':
			if (!file_exists("supplier_selection_detail_delete.php")) die("Sorry Empty Page!");
			include "supplier_selection_detail_delete.php";
			break;
		case 'Supplier-Selection-Approval':
			if (!file_exists("supplier_selection_approval.php")) die("Sorry Empty Page!");
			include "supplier_selection_approval.php";
			break;
		case 'Supplier-Selection-Approval-Add':
			if (!file_exists("supplier_selection_approval_add.php")) die("Sorry Empty Page!");
			include "supplier_selection_approval_add.php";
			break;
		case 'Supplier-Selection-View':
			if (!file_exists("supplier_selection_view.php")) die("Sorry Empty Page!");
			include "supplier_selection_view.php";
			break;
		case 'Supplier-Selection-Files':
			if (!file_exists("supplier_selection_files.php")) die("Sorry Empty Page!");
			include "supplier_selection_files.php";
			break;
		case 'Supplier-Selection-Files-Delete':
			if (!file_exists("supplier_selection_files_delete.php")) die("Sorry Empty Page!");
			include "supplier_selection_files_delete.php";
			break;
		case 'Supplier-Evaluation':
			if (!file_exists("supplier_evaluation.php")) die("Sorry Empty Page!");
			include "supplier_evaluation.php";
			break;
		case 'Supplier-Evaluation-Add':
			if (!file_exists("supplier_evaluation_add.php")) die("Sorry Empty Page!");
			include "supplier_evaluation_add.php";
			break;
		case 'Supplier-Evaluation-Edit':
			if (!file_exists("supplier_evaluation_edit.php")) die("Sorry Empty Page!");
			include "supplier_evaluation_edit.php";
			break;
		case 'Supplier-Evaluation-Detail':
			if (!file_exists("supplier_evaluation_detail.php")) die("Sorry Empty Page!");
			include "supplier_evaluation_detail.php";
			break;
		case 'Supplier-Evaluation-Detail-Delete':
			if (!file_exists("supplier_evaluation_detail_delete.php")) die("Sorry Empty Page!");
			include "supplier_evaluation_detail_delete.php";
			break;
		case 'Supplier-Evaluation-Approval':
			if (!file_exists("supplier_evaluation_approval.php")) die("Sorry Empty Page!");
			include "supplier_evaluation_approval.php";
			break;
		case 'Supplier-Evaluation-Approval-Add':
			if (!file_exists("supplier_evaluation_approval_add.php")) die("Sorry Empty Page!");
			include "supplier_evaluation_approval_add.php";
			break;
		case 'Supplier-Evaluation-View':
			if (!file_exists("supplier_evaluation_view.php")) die("Sorry Empty Page!");
			include "supplier_evaluation_view.php";
			break;
		case 'Supplier-Evaluation-Files':
			if (!file_exists("supplier_evaluation_files.php")) die("Sorry Empty Page!");
			include "supplier_evaluation_files.php";
			break;
		case 'Supplier-Evaluation-Files-Delete':
			if (!file_exists("supplier_evaluation_files_delete.php")) die("Sorry Empty Page!");
			include "supplier_evaluation_files_delete.php";
			break;

			# MASTER ORDER
		case 'Salesman':
			if (!file_exists("salesman.php")) die("Sorry Empty Page!");
			include "salesman.php";
			break;
		case 'Salesman-Add':
			if (!file_exists("salesman_add.php")) die("Sorry Empty Page!");
			include "salesman_add.php";
			break;
		case 'Salesman-Delete':
			if (!file_exists("salesman_delete.php")) die("Sorry Empty Page!");
			include "salesman_delete.php";
			break;
		case 'Salesman-Edit':
			if (!file_exists("salesman_edit.php")) die("Sorry Empty Page!");
			include "salesman_edit.php";
			break;

			# ticketing ==================================================================
		case 'Ticket-Tracking':
			if (!file_exists("helpdesk_tracking.php")) die("Sorry Empty Page!");
			include "helpdesk_tracking.php";
			break;
		case 'Ticket-Overview':
			if (!file_exists("helpdesk_overview.php")) die("Sorry Empty Page!");
			include "helpdesk_overview.php";
			break;
		case 'Ticket-Board':
			if (!file_exists("helpdesk_board.php")) die("Sorry Empty Page!");
			include "helpdesk_board.php";
			break;
			case 'Ticket-Detail':
				if (!file_exists("helpdesk_detail.php")) die("Sorry Empty Page!");
				include "helpdesk_detail.php";
				break;

			
			# Helpdesk ==================================================================
		case 'Helpdesk':
			if (!file_exists("helpdesk.php")) die("Sorry Empty Page!");
			include "helpdesk.php";
			break;
		case 'Helpdesk-View':
			if (!file_exists("helpdesk_view.php")) die("Sorry Empty Page!");
			include "helpdesk_view.php";
			break;
		case 'Helpdesk-Edit':
			if (!file_exists("helpdesk.php")) die("Sorry Empty Page!");
			include "helpdesk_edit.php";
			break;
		case 'Helpdesk-Add':
			if (!file_exists("helpdesk.php")) die("Sorry Empty Page!");
			include "helpdesk_add.php";
			break;
		case 'Helpdesk-Delete':
			if (!file_exists("helpdesk.php")) die("Sorry Empty Page!");
			include "helpdesk_delete.php";
			break;
		case 'Helpdesk-Detail':
			if (!file_exists("helpdesk_detail.php")) die("Sorry Empty Page!");
			include "helpdesk_detail.php";
			break;
		case 'Helpdesk-Inbox':
			if (!file_exists("helpdesk_inbox.php")) die("Sorry Empty Page!");
			include "helpdesk_inbox.php";
			break;
		case 'Helpdesk-Calendar':
			if (!file_exists("helpdesk_calendar.php")) die("Sorry Empty Page!");
			include "helpdesk_calendar.php";
			break;

			# ticketing Internal ==================================================================
		case 'Ticket-Tracking-Internal':
			if (!file_exists("helpdesk_internal_tracking.php")) die("Sorry Empty Page!");
			include "helpdesk_internal_tracking.php";
			break;
		case 'Ticket-Overview-Internal':
			if (!file_exists("helpdesk_internal_overview.php")) die("Sorry Empty Page!");
			include "helpdesk_internal_overview.php";
			break;
		case 'Ticket-Board-Internal':
			if (!file_exists("helpdesk_internal_board.php")) die("Sorry Empty Page!");
			include "helpdesk_internal_board.php";
			break;
			case 'Ticket-Detail-Internal':
				if (!file_exists("helpdesk_internal_detail.php")) die("Sorry Empty Page!");
				include "helpdesk_internal_detail.php";
				break;


			# Helpdesk Internal ==================================================================
		case 'Helpdesk-Internal':
			if (!file_exists("helpdesk_internal.php")) die("Sorry Empty Page!");
			include "helpdesk_internal.php";
			break;
		case 'Helpdesk-View-Internal':
			if (!file_exists("helpdesk_internal_view.php")) die("Sorry Empty Page!");
			include "helpdesk_internal_view.php";
			break;
		case 'Helpdesk-Edit-Internal':
			if (!file_exists("helpdesk_internal.php")) die("Sorry Empty Page!");
			include "helpdesk_internal_edit.php";
			break;
		case 'Helpdesk-Add-Internal':
			if (!file_exists("helpdesk_internal.php")) die("Sorry Empty Page!");
			include "helpdesk_internal_add.php";
			break;
		case 'Helpdesk-Delete-Internal':
			if (!file_exists("helpdesk_internal.php")) die("Sorry Empty Page!");
			include "helpdesk_internal_delete.php";
			break;
		case 'Helpdesk-Detail-Internal':
			if (!file_exists("helpdesk_internal_detail.php")) die("Sorry Empty Page!");
			include "helpdesk_internal_detail.php";
			break;
		case 'Helpdesk-Inbox-Internal':
			if (!file_exists("helpdesk_internal_inbox.php")) die("Sorry Empty Page!");
			include "helpdesk_internal_inbox.php";
			break;
		case 'Helpdesk-Calendar-Internal':
			if (!file_exists("helpdesk_internal_calendar.php")) die("Sorry Empty Page!");
			include "helpdesk_internal_calendar.php";
			break;


			# MASTER APPROVAL
		case 'Approval':
			if (!file_exists("approval.php")) die("Sorry Empty Page!");
			include "approval.php";
			break;
		case 'Approval-Add':
			if (!file_exists("approval_add.php")) die("Sorry Empty Page!");
			include "approval_add.php";
			break;
		case 'Approval-Delete':
			if (!file_exists("approval_delete.php")) die("Sorry Empty Page!");
			include "approval_delete.php";
			break;
		case 'Approval-Edit':
			if (!file_exists("approval_edit.php")) die("Sorry Empty Page!");
			include "approval_edit.php";
			break;

			# MASTER CUSTOMER
		case 'Customer':
			if (!file_exists("customer.php")) die("Sorry Empty Page!");
			include "customer.php";
			break;
		case 'Customer-Add':
			if (!file_exists("customer_add.php")) die("Sorry Empty Page!");
			include "customer_add.php";
			break;
		case 'Customer-Delete':
			if (!file_exists("customer_delete.php")) die("Sorry Empty Page!");
			include "customer_delete.php";
			break;
		case 'Customer-Edit':
			if (!file_exists("customer_edit.php")) die("Sorry Empty Page!");
			include "customer_edit.php";
			break;
		case 'Customer-View':
			if (!file_exists("customer_view.php")) die("Sorry Empty Page!");
			include "customer_view.php";
			break;
		case 'Customer-Prospect-View':
			if (!file_exists("customer_prospect_view.php")) die("Sorry Empty Page!");
			include "customer_prospect_view.php";
			break;
		case 'Customer-Prospect':
			if (!file_exists("customer_prospect.php")) die("Sorry Empty Page!");
			include "customer_prospect.php";
			break;
		case 'Customer-Prospect-Add':
			if (!file_exists("customer_prospect_add.php")) die("Sorry Empty Page!");
			include "customer_prospect_add.php";
			break;
		case 'Customer-Prospect-Delete':
			if (!file_exists("customer_prospect_delete.php")) die("Sorry Empty Page!");
			include "customer_prospect_delete.php";
			break;
		case 'Customer-Prospect-Edit':
			if (!file_exists("customer_prospect_edit.php")) die("Sorry Empty Page!");
			include "customer_prospect_edit.php";
			break;
		case 'Customer-Prospect-Change':
			if (!file_exists("customer_prospect_change.php")) die("Sorry Empty Page!");
			include "customer_prospect_change.php";
			break;
		case 'Customer-Activity':
			if (!file_exists("customer_activity.php")) die("Sorry Empty Page!");
			include "customer_activity.php";
			break;
		case 'Customer-Activity-Add':
			if (!file_exists("customer_activity_add.php")) die("Sorry Empty Page!");
			include "customer_activity_add.php";
			break;
		case 'Customer-Activity-Delete':
			if (!file_exists("customer_activity_delete.php")) die("Sorry Empty Page!");
			include "customer_activity_delete.php";
			break;
		case 'Customer-Activity-Edit':
			if (!file_exists("customer_activity_edit.php")) die("Sorry Empty Page!");
			include "customer_activity_edit.php";
			break;
		case 'Customer-Detail':
			if (!file_exists("customer_detail.php")) die("Sorry Empty Page!");
			include "customer_detail.php";
			break;

		case 'Customer-Detail-Delete':
			if (!file_exists("customer_detail_delete.php")) die("Sorry Empty Page!");
			include "customer_detail_delete.php";
			break;
		case 'Customer-Detail-Edit':
			if (!file_exists("customer_detail_edit.php")) die("Sorry Empty Page!");
			include "customer_detail_edit.php";
			break;
		case 'Customer-Prospect-Detail':
			if (!file_exists("customer_prospect_detail.php")) die("Sorry Empty Page!");
			include "customer_prospect_detail.php";
			break;
		case 'Customer-Prospect-Detail-Delete':
			if (!file_exists("customer_prospect_detail_delete.php")) die("Sorry Empty Page!");
			include "customer_prospect_detail_delete.php";
			break;
		case 'Customer-Files':
			if (!file_exists("customer_files.php")) die("Sorry Empty Page!");
			include "customer_files.php";
			break;
		case 'Customer-Files-Delete':
			if (!file_exists("customer_files_delete.php")) die("Sorry Empty Page!");
			include "customer_files_delete.php";
			break;

		case 'Customer-Change':
			if (!file_exists("customer_change.php")) die("Sorry Empty Page!");
			include "customer_change.php";
			break;
		case 'Customer-Change-Add':
			if (!file_exists("customer_change_add.php")) die("Sorry Empty Page!");
			include "customer_change_add.php";
			break;
		case 'Customer-Change-Edit':
			if (!file_exists("customer_change_edit.php")) die("Sorry Empty Page!");
			include "customer_change_edit.php";
			break;
		case 'Customer-Change-Files':
			if (!file_exists("customer_change_files.php")) die("Sorry Empty Page!");
			include "customer_change_files.php";
			break;
		case 'Customer-Change-Files-Delete':
			if (!file_exists("customer_change_files_delete.php")) die("Sorry Empty Page!");
			include "customer_change_files_delete.php";
			break;
		case 'PDF-Customer-Change':
			if (!file_exists("pdf_customer_change.php")) die("Sorry Empty Page!");
			include "pdf_customer_change.php";
			break;

			# MASTER SHIPPER
		case 'Shipper':
			if (!file_exists("shipper.php")) die("Sorry Empty Page!");
			include "shipper.php";
			break;
		case 'Shipper-Add':
			if (!file_exists("shipper_add.php")) die("Sorry Empty Page!");
			include "shipper_add.php";
			break;
		case 'Shipper-Delete':
			if (!file_exists("shipper_delete.php")) die("Sorry Empty Page!");
			include "shipper_delete.php";
			break;
		case 'Shipper-Edit':
			if (!file_exists("shipper_edit.php")) die("Sorry Empty Page!");
			include "shipper_edit.php";
			break;

			# MASTER WAREHOUSE
		case 'Warehouse':
			if (!file_exists("warehouse.php")) die("Sorry Empty Page!");
			include "warehouse.php";
			break;
		case 'Warehouse-Add':
			if (!file_exists("warehouse_add.php")) die("Sorry Empty Page!");
			include "warehouse_add.php";
			break;
		case 'Warehouse-Delete':
			if (!file_exists("warehouse_delete.php")) die("Sorry Empty Page!");
			include "warehouse_delete.php";
			break;
		case 'Warehouse-Edit':
			if (!file_exists("warehouse_edit.php")) die("Sorry Empty Page!");
			include "warehouse_edit.php";
			break;

			# MASTER PRODUCT
		case 'Product':
			if (!file_exists("product.php")) die("Sorry Empty Page!");
			include "product.php";
			break;
		case 'Product-Add':
			if (!file_exists("product_add.php")) die("Sorry Empty Page!");
			include "product_add.php";
			break;
		case 'Product-Delete':
			if (!file_exists("product_delete.php")) die("Sorry Empty Page!");
			include "product_delete.php";
			break;
		case 'Product-Edit':
			if (!file_exists("product_edit.php")) die("Sorry Empty Page!");
			include "product_edit.php";
			break;
		case 'Product-View':
			if (!file_exists("product_view.php")) die("Sorry Empty Page!");
			include "product_view.php";
			break;
		case 'Product-Category':
			if (!file_exists("product_category.php")) die("Sorry Empty Page!");
			include "product_category.php";
			break;
		case 'Product-Category-Add':
			if (!file_exists("product_category_add.php")) die("Sorry Empty Page!");
			include "product_category_add.php";
			break;
		case 'Product-Category-Delete':
			if (!file_exists("product_category_delete.php")) die("Sorry Empty Page!");
			include "product_category_delete.php";
			break;
		case 'Product-Category-Edit':
			if (!file_exists("product_category_edit.php")) die("Sorry Empty Page!");
			include "product_category_edit.php";
			break;


			# MASTER SERVICE
		case 'Service':
			if (!file_exists("service.php")) die("Sorry Empty Page!");
			include "service.php";
			break;
		case 'Service-Add':
			if (!file_exists("service_add.php")) die("Sorry Empty Page!");
			include "service_add.php";
			break;
		case 'Service-Delete':
			if (!file_exists("service_delete.php")) die("Sorry Empty Page!");
			include "service_delete.php";
			break;
		case 'Service-Edit':
			if (!file_exists("service_edit.php")) die("Sorry Empty Page!");
			include "service_edit.php";
			break;
		case 'Service-View':
			if (!file_exists("service_view.php")) die("Sorry Empty Page!");
			include "service_view.php";
			break;
		case 'Service-Category':
			if (!file_exists("service_category.php")) die("Sorry Empty Page!");
			include "service_category.php";
			break;
		case 'Service-Category-Add':
			if (!file_exists("service_category_add.php")) die("Sorry Empty Page!");
			include "service_category_add.php";
			break;
		case 'Service-Category-Delete':
			if (!file_exists("service_category_delete.php")) die("Sorry Empty Page!");
			include "service_category_delete.php";
			break;
		case 'Service-Category-Edit':
			if (!file_exists("service_category_edit.php")) die("Sorry Empty Page!");
			include "service_category_edit.php";
			break;



			# MASTER RACKING
		case 'Racking':
			if (!file_exists("racking.php")) die("Sorry Empty Page!");
			include "racking.php";
			break;
		case 'Racking-Add':
			if (!file_exists("racking_add.php")) die("Sorry Empty Page!");
			include "racking_add.php";
			break;
		case 'Racking-Delete':
			if (!file_exists("racking_delete.php")) die("Sorry Empty Page!");
			include "racking_delete.php";
			break;
		case 'Racking-Edit':
			if (!file_exists("racking_edit.php")) die("Sorry Empty Page!");
			include "racking_edit.php";
			break;

			# MASTER PURCHASE
		case 'Purchase':
			if (!file_exists("purchase.php")) die("Sorry Empty Page!");
			include "purchase.php";
			break;
		case 'Purchase-Dashboard':
			if (!file_exists("purchase_dashboard.php")) die("Sorry Empty Page!");
			include "purchase_dashboard.php";
			break;
		case 'Purchase-Task':
			if (!file_exists("purchase_task.php")) die("Sorry Empty Page!");
			include "purchase_task.php";
			break;
		case 'Purchase-All-View':
			if (!file_exists("purchase_all_view.php")) die("Sorry Empty Page!");
			include "purchase_all_view.php";
			break;
		case 'Purchase-Add':
			if (!file_exists("purchase_add.php")) die("Sorry Empty Page!");
			include "purchase_add.php";
			break;
		case 'Purchase-Delete':
			if (!file_exists("purchase_delete.php")) die("Sorry Empty Page!");
			include "purchase_delete.php";
			break;
		case 'Purchase-Cancel':
			if (!file_exists("purchase_cancel.php")) die("Sorry Empty Page!");
			include "purchase_cancel.php";
			break;
		case 'Purchase-Edit':
			if (!file_exists("purchase_edit.php")) die("Sorry Empty Page!");
			include "purchase_edit.php";
			break;
		case 'Purchase-Detail':
			if (!file_exists("purchase_detail.php")) die("Sorry Empty Page!");
			include "purchase_detail.php";
			break;
		case 'Purchase-Detail-Delete':
			if (!file_exists("purchase_detail_delete.php")) die("Sorry Empty Page!");
			include "purchase_detail_delete.php";
			break;
		case 'Purchase-View':
			if (!file_exists("purchase_view.php")) die("Sorry Empty Page!");
			include "purchase_view.php";
			break;
		case 'Purchase-View-All':
			if (!file_exists("purchase_view_all.php")) die("Sorry Empty Page!");
			include "purchase_view_all.php";
			break;
		case 'Purchase-View-Archive':
			if (!file_exists("purchase_view_archive.php")) die("Sorry Empty Page!");
			include "purchase_view_archive.php";
			break;
		case 'Purchase-Report':
			if (!file_exists("purchase_report.php")) die("Sorry Empty Page!");
			include "purchase_report.php";
			break;
		case 'Purchase-Validasi':
			if (!file_exists("purchase_validasi.php")) die("Sorry Empty Page!");
			include "purchase_validasi.php";
			break;
		case 'Purchase-Version':
			if (!file_exists("purchase_version.php")) die("Sorry Empty Page!");
			include "purchase_version.php";
			break;
		case 'Purchase-Files':
			if (!file_exists("purchase_files.php")) die("Sorry Empty Page!");
			include "purchase_files.php";
			break;
		case 'Purchase-Files-Delete':
			if (!file_exists("purchase_files_delete.php")) die("Sorry Empty Page!");
			include "purchase_files_delete.php";
			break;
		case 'Purchase-Approval':
			if (!file_exists("purchase_approval.php")) die("Sorry Empty Page!");
			include "purchase_approval.php";
			break;
		case 'Purchase-Approval-Add':
			if (!file_exists("purchase_approval_add.php")) die("Sorry Empty Page!");
			include "purchase_approval_add.php";
			break;
		case 'Purchase-Status':
			if (!file_exists("purchase_status.php")) die("Sorry Empty Page!");
			include "purchase_status.php";
			break;
		case 'PDF-Purchase-Order':
			if (!file_exists("pdf_purchase_order.php")) die("Sorry Empty Page!");
			include "pdf_purchase_order.php";
			break;
		case 'Purchase-Request':
			if (!file_exists("purchase_request.php")) die("Sorry Empty Page!");
			include "purchase_request.php";
			break;
		case 'Purchase-Request-Add':
			if (!file_exists("purchase_request_add.php")) die("Sorry Empty Page!");
			include "purchase_request_add.php";
			break;
		case 'Purchase-Request-Delete':
			if (!file_exists("purchase_request_delete.php")) die("Sorry Empty Page!");
			include "purchase-request_delete.php";
			break;
		case 'Purchase-Request-Cancel':
			if (!file_exists("purchase_request_cancel.php")) die("Sorry Empty Page!");
			include "purchase_request_cancel.php";
			break;
		case 'Purchase-Request-Edit':
			if (!file_exists("purchase_request_edit.php")) die("Sorry Empty Page!");
			include "purchase_request_edit.php";
			break;
		case 'Purchase-Request-Detail':
			if (!file_exists("purchase_request_detail.php")) die("Sorry Empty Page!");
			include "purchase_request_detail.php";
			break;
		case 'Purchase-Request-Detail-Delete':
			if (!file_exists("purchase_request_detail_delete.php")) die("Sorry Empty Page!");
			include "purchase_request_detail_delete.php";
			break;
		case 'Purchase-Request-View':
			if (!file_exists("purchase_request_view.php")) die("Sorry Empty Page!");
			include "purchase_request_view.php";
			break;
		case 'Purchase-Request-View-Archive':
			if (!file_exists("purchase_request_view_archive.php")) die("Sorry Empty Page!");
			include "purchase_request_view_archive.php";
			break;
		case 'Purchase-Request-Files':
			if (!file_exists("purchase_request_files.php")) die("Sorry Empty Page!");
			include "purchase_request_files.php";
			break;
		case 'Purchase-Request-Files-Delete':
			if (!file_exists("purchase_request_files_delete.php")) die("Sorry Empty Page!");
			include "purchase_request_files_delete.php";
			break;
		case 'Purchase-Request-Version':
			if (!file_exists("purchase_request_version.php")) die("Sorry Empty Page!");
			include "purchase_request_version.php";
			break;
		case 'Purchase-Request-Status':
			if (!file_exists("purchase_request_status.php")) die("Sorry Empty Page!");
			include "purchase_request_status.php";
			break;
		case 'Purchase-Request-Approval':
			if (!file_exists("purchase_request_approval.php")) die("Sorry Empty Page!");
			include "purchase_request_approval.php";
			break;
		case 'Purchase-Request-Approval-Add':
			if (!file_exists("purchase_request_approval_add.php")) die("Sorry Empty Page!");
			include "purchase_request_approval_add.php";
			break;
		case 'PDF-Purchase-Request':
			if (!file_exists("pdf_purchase_request.php")) die("Sorry Empty Page!");
			include "pdf_purchase_request.php";
			break;
		case 'Purchase-RFQ':
			if (!file_exists("purchase_rfq.php")) die("Sorry Empty Page!");
			include "purchase_rfq.php";
			break;
		case 'Purchase-RFQ-Add':
			if (!file_exists("purchase_rfq_add.php")) die("Sorry Empty Page!");
			include "purchase_rfq_add.php";
			break;
		case 'Purchase-RFQ-View':
			if (!file_exists("purchase_rfq_view.php")) die("Sorry Empty Page!");
			include "purchase_rfq_view.php";
			break;
		case 'Purchase-RFQ-Status':
			if (!file_exists("purchase_rfq_status.php")) die("Sorry Empty Page!");
			include "purchase_rfq_status.php";
			break;
		case 'Purchase-RFQ-Edit':
			if (!file_exists("purchase_rfq_edit.php")) die("Sorry Empty Page!");
			include "purchase_rfq_edit.php";
			break;
		case 'Purchase-RFQ-Cancel':
			if (!file_exists("purchase_rfq_cancel.php")) die("Sorry Empty Page!");
			include "purchase_rfq_cancel.php";
			break;
		case 'Purchase-RFQ-Files':
			if (!file_exists("purchase_rfq_files.php")) die("Sorry Empty Page!");
			include "purchase_rfq_files.php";
			break;
		case 'Purchase-RFQ-Files-Delete':
			if (!file_exists("purchase_rfq_files.php")) die("Sorry Empty Page!");
			include "purchase_rfq_files.php";
			break;
		case 'PDF-Purchase-RFQ':
			if (!file_exists("pdf_purchase_rfq.php")) die("Sorry Empty Page!");
			include "pdf_purchase_rfq.php";
			break;
		case 'Purchase-Term':
			if (!file_exists("purchase_term.php")) die("Sorry Empty Page!");
			include "purchase_term.php";
			break;
		case 'Purchase-Term-Delete':
			if (!file_exists("purchase_term_delete.php")) die("Sorry Empty Page!");
			include "purchase_term_delete.php";
			break;
		case 'Purchase-Cash':
			if (!file_exists("purchase_cash.php")) die("Sorry Empty Page!");
			include "purchase_cash.php";
			break;
		case 'Purchase-Cash-Add':
			if (!file_exists("purchase_cash_add.php")) die("Sorry Empty Page!");
			include "purchase_cash_add.php";
			break;
		case 'Purchase-Cash-Delete':
			if (!file_exists("purchase_cash_delete.php")) die("Sorry Empty Page!");
			include "purchase_cash_delete.php";
			break;
		case 'Purchase-Cash-Cancel':
			if (!file_exists("purchase_cash_cancel.php")) die("Sorry Empty Page!");
			include "purchase_cash_cancel.php";
			break;
		case 'Purchase-Cash-Edit':
			if (!file_exists("purchase_cash_edit.php")) die("Sorry Empty Page!");
			include "purchase_cash_edit.php";
			break;
		case 'Purchase-Cash-Detail':
			if (!file_exists("purchase_cash_detail.php")) die("Sorry Empty Page!");
			include "purchase_cash_detail.php";
			break;
		case 'Purchase-Cash-Detail-Delete':
			if (!file_exists("purchase_cash_detail_delete.php")) die("Sorry Empty Page!");
			include "purchase_cash_detail_delete.php";
			break;
		case 'Purchase-Cash-Request-View':
			if (!file_exists("purchase_cash_request_view.php")) die("Sorry Empty Page!");
			include "purchase_cash_request_view.php";
			break;
		case 'Purchase-Cash-Request-View-Archive':
			if (!file_exists("purchase_cash_request_view_archive.php")) die("Sorry Empty Page!");
			include "purchase_cash_request_view_archive.php";
			break;
		case 'Purchase-Cash-Task':
			if (!file_exists("purchase_cash_task.php")) die("Sorry Empty Page!");
			include "purchase_cash_task.php";
			break;
		case 'Purchase-Cash-Files':
			if (!file_exists("purchase_cash_files.php")) die("Sorry Empty Page!");
			include "purchase_cash_files.php";
			break;
		case 'Purchase-Cash-Files-Delete':
			if (!file_exists("purchase_cash_files_delete.php")) die("Sorry Empty Page!");
			include "purchase_cash_files_delete.php";
			break;
		case 'Purchase-Cash-Approval':
			if (!file_exists("purchase_cash_approval.php")) die("Sorry Empty Page!");
			include "purchase_cash_approval.php";
			break;
		case 'Purchase-Cash-Approval-Add':
			if (!file_exists("purchase_cash_approval_add.php")) die("Sorry Empty Page!");
			include "purchase_cash_approval_add.php";
			break;
		case 'Purchase-Cash-Status':
			if (!file_exists("purchase_cash_status.php")) die("Sorry Empty Page!");
			include "purchase_cash_status.php";
			break;
		case 'PDF-Purchase-Cash':
			if (!file_exists("pdf_purchase_cash.php")) die("Sorry Empty Page!");
			include "pdf_purchase_cash.php";
			break;
		case 'Purchase-Cash-View':
			if (!file_exists("purchase_view.php")) die("Sorry Empty Page!");
			include "purchase_cash_view.php";
			break;
		case 'Purchase-Cash-View-Archive':
			if (!file_exists("purchase_cash_view_archive.php")) die("Sorry Empty Page!");
			include "purchase_cash_view_archive.php";
			break;
		case 'Purchase-Cash-Version':
			if (!file_exists("purchase_cash_version.php")) die("Sorry Empty Page!");
			include "purchase_cash_version.php";
			break;
		case 'Purchase-Report01':
			if (!file_exists("purchase_report01.php")) die("Sorry Empty Page!");
			include "purchase_report01.php";
			break;
		case 'Purchase-Report02':
			if (!file_exists("purchase_report02.php")) die("Sorry Empty Page!");
			include "purchase_report02.php";
			break;
		case 'Purchase-Target':
			if (!file_exists("purchase_target.php")) die("Sorry Empty Page!");
			include "purchase_target.php";
			break;
		case 'Purchase-Target-Files':
			if (!file_exists("purchase_target_files.php")) die("Sorry Empty Page!");
			include "purchase_target_files.php";
			break;
		case 'Purchase-Target-Files-Delete':
			if (!file_exists("purchase_target_files_delete.php")) die("Sorry Empty Page!");
			include "purchase_target_files_delete.php";
			break;
		case 'Purchase-Resiko':
			if (!file_exists("purchase_resiko.php")) die("Sorry Empty Page!");
			include "purchase_resiko.php";
			break;
		case 'Purchase-Resiko-Files':
			if (!file_exists("purchase_resiko_files.php")) die("Sorry Empty Page!");
			include "purchase_resiko_files.php";
			break;
		case 'Purchase-Resiko-Files-Delete':
			if (!file_exists("purchase_resiko_files_delete.php")) die("Sorry Empty Page!");
			include "purchase_resiko_files_delete.php";
			break;


		case 'Receive':
			if (!file_exists("receive.php")) die("Sorry Empty Page!");
			include "receive.php";
			break;
		case 'Receive-Task':
			if (!file_exists("receive_task.php")) die("Sorry Empty Page!");
			include "receive_task.php";
			break;
		case 'Receive-Add':
			if (!file_exists("receive_add.php")) die("Sorry Empty Page!");
			include "receive_add.php";
			break;
		case 'Receive-Edit':
			if (!file_exists("receive_edit.php")) die("Sorry Empty Page!");
			include "receive_edit.php";
			break;
		case 'Receive-Detail':
			if (!file_exists("receive_detail.php")) die("Sorry Empty Page!");
			include "receive_detail.php";
			break;
		case 'Receive-View':
			if (!file_exists("receive_view.php")) die("Sorry Empty Page!");
			include "receive_view.php";
			break;
		case 'Receive-Status':
			if (!file_exists("receive_status.php")) die("Sorry Empty Page!");
			include "receive_status.php";
			break;
		case 'Receive-Version':
			if (!file_exists("receive_version.php")) die("Sorry Empty Page!");
			include "receive_version.php";
			break;
		case 'Receive-Detail-Delete':
			if (!file_exists("receive_detail_delete.php")) die("Sorry Empty Page!");
			include "receive_detail_delete.php";
			break;
		case 'Receive-Files':
			if (!file_exists("receive_files.php")) die("Sorry Empty Page!");
			include "receive_files.php";
			break;
		case 'Receive-Files-Delete':
			if (!file_exists("receive_files_delete.php")) die("Sorry Empty Page!");
			include "receive_files_delete.php";
			break;
		case 'PDF-Receive':
			if (!file_exists("pdf_receive.php")) die("Sorry Empty Page!");
			include "pdf_receive.php";
			break;
		case 'Receive-Approval':
			if (!file_exists("receive_approval.php")) die("Sorry Empty Page!");
			include "receive_approval.php";
			break;
		case 'Receive-Approval-Add':
			if (!file_exists("receive_approval_add.php")) die("Sorry Empty Page!");
			include "receive_approval_add.php";
			break;
		case 'Receive-Invoice':
			if (!file_exists("receive_invoice.php")) die("Sorry Empty Page!");
			include "receive_invoice.php";
			break;
		case 'Receive-Invoice-Task':
			if (!file_exists("receive_invoice_task.php")) die("Sorry Empty Page!");
			include "receive_invoice_task.php";
			break;
		case 'Receive-Invoice-Add':
			if (!file_exists("receive_invoice_add.php")) die("Sorry Empty Page!");
			include "receive_invoice_add.php";
			break;
		case 'Receive-Invoice-Edit':
			if (!file_exists("receive_invoice_edit.php")) die("Sorry Empty Page!");
			include "receive_invoice_edit.php";
			break;
		case 'Receive-Invoice-Detail':
			if (!file_exists("receive_invoice_detail.php")) die("Sorry Empty Page!");
			include "receive_invoice_detail.php";
			break;
		case 'Receive-Invoice-View':
			if (!file_exists("receive_invoice_view.php")) die("Sorry Empty Page!");
			include "receive_invoice_view.php";
			break;
		case 'Receive-Invoice-Status':
			if (!file_exists("receive_invoice_status.php")) die("Sorry Empty Page!");
			include "receive_invoice_status.php";
			break;
		case 'Receive-Invoice-Version':
			if (!file_exists("receive_invoice_version.php")) die("Sorry Empty Page!");
			include "receive_invoice_version.php";
			break;
		case 'Receive-Invoice-Detail-Delete':
			if (!file_exists("receive_invoice_detail_delete.php")) die("Sorry Empty Page!");
			include "receive_invoice_detail_delete.php";
			break;
		case 'Receive-Invoice-Files':
			if (!file_exists("receive_invoice_files.php")) die("Sorry Empty Page!");
			include "receive_invoice_files.php";
			break;
		case 'Receive-Invoice-Files-Delete':
			if (!file_exists("receive_invoice_files_delete.php")) die("Sorry Empty Page!");
			include "receive_invoice_files_delete.php";
			break;
		case 'PDF-Receive-Invoice':
			if (!file_exists("pdf_receive_invoice.php")) die("Sorry Empty Page!");
			include "pdf_receive_invoice.php";
			break;

		case 'Receive-Transfer':
			if (!file_exists("receive_transfer.php")) die("Sorry Empty Page!");
			include "receive_transfer.php";
			break;
		case 'Receive-Transfer-Task':
			if (!file_exists("receive_transfer_task.php")) die("Sorry Empty Page!");
			include "receive_transfer_task.php";
			break;
		case 'Receive-Transfer-Add':
			if (!file_exists("receive_transfer_add.php")) die("Sorry Empty Page!");
			include "receive_transfer_add.php";
			break;
		case 'Receive-Transfer-Edit':
			if (!file_exists("receive_transfer_edit.php")) die("Sorry Empty Page!");
			include "receive_transfer_edit.php";
			break;
		case 'Receive-Transfer-Delete':
			if (!file_exists("receive_transfer_delete.php")) die("Sorry Empty Page!");
			include "receive_transfer_delete.php";
			break;
		case 'Receive-Transfer-Detail':
			if (!file_exists("receive_transfer_detail.php")) die("Sorry Empty Page!");
			include "receive_transfer_detail.php";
			break;
		case 'Receive-Transfer-View':
			if (!file_exists("receive_transfer_view.php")) die("Sorry Empty Page!");
			include "receive_transfer_view.php";
			break;
		case 'Receive-Transfer-Files':
			if (!file_exists("receive_transfer_files.php")) die("Sorry Empty Page!");
			include "receive_transfer_files.php";
			break;
		case 'Receive-Transfer-Files-Delete':
			if (!file_exists("receive_transfer_files_delete.php")) die("Sorry Empty Page!");
			include "receive_transfer_files_delete.php";
			break;
		case 'Receive-Transfer-Status':
			if (!file_exists("receive_transfer_status.php")) die("Sorry Empty Page!");
			include "receive_transfer_status.php";
			break;

		case 'Receive-Cash':
			if (!file_exists("receive_cash.php")) die("Sorry Empty Page!");
			include "receive_cash.php";
			break;
		case 'Receive-Cash-Task':
			if (!file_exists("receive_cash_task.php")) die("Sorry Empty Page!");
			include "receive_cash_task.php";
			break;
		case 'Receive-Cash-Add':
			if (!file_exists("receive_cash_add.php")) die("Sorry Empty Page!");
			include "receive_cash_add.php";
			break;
		case 'Receive-Cash-Edit':
			if (!file_exists("receive_cash_edit.php")) die("Sorry Empty Page!");
			include "receive_cash_edit.php";
			break;
		case 'Receive-Cash-Delete':
			if (!file_exists("receive_cash_delete.php")) die("Sorry Empty Page!");
			include "receive_cash_delete.php";
			break;
		case 'Receive-Cash-Detail':
			if (!file_exists("receive_cash_detail.php")) die("Sorry Empty Page!");
			include "receive_cash_detail.php";
			break;
		case 'Receive-Cash-Detail-Delete':
			if (!file_exists("receive_cash_detail_delete.php")) die("Sorry Empty Page!");
			include "receive_cash_detail_delete.php";
			break;
		case 'Receive-Cash-View':
			if (!file_exists("receive_cash_view.php")) die("Sorry Empty Page!");
			include "receive_cash_view.php";
			break;
		case 'Receive-Cash-Files':
			if (!file_exists("receive_cash_files.php")) die("Sorry Empty Page!");
			include "receive_cash_files.php";
			break;
		case 'Receive-Cash-Files-Delete':
			if (!file_exists("receive_cash_files_delete.php")) die("Sorry Empty Page!");
			include "receive_cash_files_delete.php";
			break;
		case 'Receive-Cash-Status':
			if (!file_exists("receive_cash_status.php")) die("Sorry Empty Page!");
			include "receive_transfer_cash_status.php";
			break;

		case 'Receive-Stock':
			if (!file_exists("receive_stock.php")) die("Sorry Empty Page!");
			include "receive_stock.php";
			break;
		case 'Receive-Stock-Task':
			if (!file_exists("receive_stock_task.php")) die("Sorry Empty Page!");
			include "receive_stock_task.php";
			break;
		case 'Receive-Stock-Add':
			if (!file_exists("receive_stock_add.php")) die("Sorry Empty Page!");
			include "receive_stock_add.php";
			break;
		case 'Receive-Stock-Detail':
			if (!file_exists("receive_stock_detail.php")) die("Sorry Empty Page!");
			include "receive_stock_detail.php";
			break;
		case 'Receive-Stock-View':
			if (!file_exists("receive_stock_view.php")) die("Sorry Empty Page!");
			include "receive_stock_view.php";
			break;
		case 'Receive-Stock-Approval-Add':
			if (!file_exists("receive_stock_approval_add.php")) die("Sorry Empty Page!");
			include "receive_stock_approval_add.php";
			break;
		case 'Receive-Stock-Approval':
			if (!file_exists("receive_stock_approval.php")) die("Sorry Empty Page!");
			include "receive_stock_approval.php";
			break;

			# TRAKSAKSI ==================================================================

			# MASTER SALES
		case 'Sales-Area':
			if (!file_exists("sales_area.php")) die("Sorry Empty Page!");
			include "sales_area.php";
			break;
		case 'Sales-Area-Add':
			if (!file_exists("sales_area_add.php")) die("Sorry Empty Page!");
			include "sales_area_add.php";
			break;
		case 'Sales-Area-Edit':
			if (!file_exists("sales_area_edit.php")) die("Sorry Empty Page!");
			include "sales_area_edit.php";
			break;
		case 'Sales-Area-Delete':
			if (!file_exists("sales_area_delete.php")) die("Sorry Empty Page!");
			include "sales_area_delete.php";
			break;

		case 'Sales-Quotation':
			if (!file_exists("sales_quotation.php")) die("Sorry Empty Page!");
			include "sales_quotation.php";
			break;
		case 'Sales-Quotation-Add':
			if (!file_exists("sales_quotation_add.php")) die("Sorry Empty Page!");
			include "sales_quotation_add.php";
			break;
		case 'Sales-Quotation-Edit':
			if (!file_exists("sales_quotation_edit.php")) die("Sorry Empty Page!");
			include "sales_quotation_edit.php";
			break;
		case 'Sales-Quotation-Cancel':
			if (!file_exists("sales_quotation_cancel.php")) die("Sorry Empty Page!");
			include "sales_quotation_cancel.php";
			break;
		case 'Sales-Quotation-Detail':
			if (!file_exists("sales_quotation_detail.php")) die("Sorry Empty Page!");
			include "sales_quotation_detail.php";
			break;
		case 'Sales-Quotation-Detail-Delete':
			if (!file_exists("sales_quotation_detail_delete.php")) die("Sorry Empty Page!");
			include "sales_quotation_detail_delete.php";
			break;
		case 'Sales-Quotation-Files':
			if (!file_exists("sales_quotation_files.php")) die("Sorry Empty Page!");
			include "sales_quotation_files.php";
			break;
		case 'Sales-Quotation-Files-Delete':
			if (!file_exists("sales_quotation_files_delete.php")) die("Sorry Empty Page!");
			include "sales_quotation_files_delete.php";
			break;
		case 'Sales-Quotation-View':
			if (!file_exists("sales_quotation_view.php")) die("Sorry Empty Page!");
			include "sales_quotation_view.php";
			break;
		case 'PDF-Sales-Quotation':
			if (!file_exists("pdf_sales_quotation.php")) die("Sorry Empty Page!");
			include "pdf_sales_quotation.php";
			break;


		case 'Sales':
			if (!file_exists("sales.php")) die("Sorry Empty Page!");
			include "sales.php";
			break;
		case 'Sales-Add':
			if (!file_exists("sales_add.php")) die("Sorry Empty Page!");
			include "sales_add.php";
			break;
		case 'Sales-Delete':
			if (!file_exists("sales_delete.php")) die("Sorry Empty Page!");
			include "sales_delete.php";
			break;
		case 'Sales-Cancel':
			if (!file_exists("sales_cancel.php")) die("Sorry Empty Page!");
			include "sales_cancel.php";
			break;
		case 'Sales-Edit':
			if (!file_exists("sales_edit.php")) die("Sorry Empty Page!");
			include "sales_edit.php";
			break;
		case 'Sales-Detail':
			if (!file_exists("sales_detail.php")) die("Sorry Empty Page!");
			include "sales_detail.php";
			break;
		case 'Sales-Detail-Delete':
			if (!file_exists("sales_detail_delete.php")) die("Sorry Empty Page!");
			include "sales_detail_delete.php";
			break;
		case 'Sales-View':
			if (!file_exists("sales_view.php")) die("Sorry Empty Page!");
			include "sales_view.php";
			break;
		case 'Sales-View-Only':
			if (!file_exists("sales_view_only.php")) die("Sorry Empty Page!");
			include "sales_view_only.php";
			break;
		case 'Sales-View-Archive':
			if (!file_exists("sales_view_archive.php")) die("Sorry Empty Page!");
			include "sales_view_archive.php";
			break;
		case 'Sales-Approval':
			if (!file_exists("sales_approval.php")) die("Sorry Empty Page!");
			include "sales_approval.php";
			break;
		case 'Sales-Report-01':
			if (!file_exists("sales_report_01.php")) die("Sorry Empty Page!");
			include "sales_report_01.php";
			break;
		case 'Sales-Report-02':
			if (!file_exists("sales_report_02.php")) die("Sorry Empty Page!");
			include "sales_report_02.php";
			break;
		case 'Sales-Report-03':
			if (!file_exists("sales_report_03.php")) die("Sorry Empty Page!");
			include "sales_report_03.php";
			break;
		case 'Sales-Report-04':
			if (!file_exists("sales_report_05.php")) die("Sorry Empty Page!");
			include "sales_report_04.php";
			break;
		case 'Sales-Report-05':
			if (!file_exists("sales_report_05.php")) die("Sorry Empty Page!");
			include "sales_report_05.php";
			break;
		case 'Sales-Report-06':
			if (!file_exists("sales_report_06.php")) die("Sorry Empty Page!");
			include "sales_report_06.php";
			break;

		case 'Sales-Version':
			if (!file_exists("sales_version.php")) die("Sorry Empty Page!");
			include "sales_version.php";
			break;
		case 'Sales-Files':
			if (!file_exists("sales_files.php")) die("Sorry Empty Page!");
			include "sales_files.php";
			break;
		case 'Sales-Files-Delete':
			if (!file_exists("sales_files_delete.php")) die("Sorry Empty Page!");
			include "sales_files_delete.php";
			break;
		case 'Sales-Approval':
			if (!file_exists("sales_approval.php")) die("Sorry Empty Page!");
			include "sales_approval.php";
			break;
		case 'Sales-Approval-Add':
			if (!file_exists("sales_approval_add.php")) die("Sorry Empty Page!");
			include "sales_approval_add.php";
			break;
		case 'Sales-Status':
			if (!file_exists("sales_status.php")) die("Sorry Empty Page!");
			include "sales_status.php";
			break;
		case 'PDF-Sales':
			if (!file_exists("pdf_sales.php")) die("Sorry Empty Page!");
			include "pdf_sales.php";
			break;

		case 'Sales-Closing':
			if (!file_exists("sales_closing.php")) die("Sorry Empty Page!");
			include "sales_closing.php";
			break;
		case 'Sales-Closing-Add':
			if (!file_exists("sales_closing_add.php")) die("Sorry Empty Page!");
			include "sales_closing_add.php";
			break;
		case 'Sales-Closing-Edit':
			if (!file_exists("sales_closing_edit.php")) die("Sorry Empty Page!");
			include "sales_closing_edit.php";
			break;
		case 'Sales-Closing-View':
			if (!file_exists("sales_closing_view.php")) die("Sorry Empty Page!");
			include "sales_closing_view.php";
			break;
		case 'Sales-Closing-Delete':
			if (!file_exists("sales_closing_delete.php")) die("Sorry Empty Page!");
			include "sales_closing_delete.php";
			break;
		case 'Sales-Closing-Detail':
			if (!file_exists("sales_closing_detail.php")) die("Sorry Empty Page!");
			include "sales_closing_detail.php";
			break;
		case 'Sales-Closing-Detail-Delete':
			if (!file_exists("sales_closing_detail_delete.php")) die("Sorry Empty Page!");
			include "sales_closing_detail_delete.php";
			break;
		case 'Sales-Closing-Files':
			if (!file_exists("sales_closing_files.php")) die("Sorry Empty Page!");
			include "sales_closing_files.php";
			break;
		case 'Sales-Files-Delete':
			if (!file_exists("sales_closing_files_delete.php")) die("Sorry Empty Page!");
			include "sales_closing_files_delete.php";
			break;
		case 'PDF-Sales-Closing':
			if (!file_exists("pdf_sales_closing.php")) die("Sorry Empty Page!");
			include "pdf_sales_closing.php";
			break;


		case 'Sales-Change':
			if (!file_exists("sales_change.php")) die("Sorry Empty Page!");
			include "sales_change.php";
			break;
		case 'Sales-Change-Add':
			if (!file_exists("sales_change_add.php")) die("Sorry Empty Page!");
			include "sales_change_add.php";
			break;
		case 'Sales-Change-Edit':
			if (!file_exists("sales_change_edit.php")) die("Sorry Empty Page!");
			include "sales_change_edit.php";
			break;
		case 'Sales-Change-Detail':
			if (!file_exists("sales_change_detail.php")) die("Sorry Empty Page!");
			include "sales_change_detail.php";
			break;
		case 'Sales-Change-Detail-Delete':
			if (!file_exists("sales_change_detail_delete.php")) die("Sorry Empty Page!");
			include "sales_change_detail_delete.php";
			break;
		case 'Sales-Change-View':
			if (!file_exists("sales_change_view.php")) die("Sorry Empty Page!");
			include "sales_change_view.php";
			break;

		case 'Sales-Target':
			if (!file_exists("sales_target.php")) die("Sorry Empty Page!");
			include "sales_target.php";
			break;
		case 'Sales-Target-Files':
			if (!file_exists("sales_target_files.php")) die("Sorry Empty Page!");
			include "sales_target_files.php";
			break;
		case 'Sales-Target-Files-Delete':
			if (!file_exists("sales_target_files_delete.php")) die("Sorry Empty Page!");
			include "sales_target_files_delete.php";
			break;

		case 'Sales-Resiko':
			if (!file_exists("sales_resiko.php")) die("Sorry Empty Page!");
			include "sales_resiko.php";
			break;
		case 'Sales-Resiko-Files':
			if (!file_exists("sales_resiko_files.php")) die("Sorry Empty Page!");
			include "sales_resiko_files.php";
			break;
		case 'Sales-Resiko-Files-Delete':
			if (!file_exists("sales_resiko_files_delete.php")) die("Sorry Empty Page!");
			include "sales_resiko_files_delete.php";
			break;

		case 'Sales-Contract':
			if (!file_exists("sales_contract.php")) die("Sorry Empty Page!");
			include "sales_contract.php";
			break;
		case 'Sales-Contract-Add':
			if (!file_exists("sales_contract_add.php")) die("Sorry Empty Page!");
			include "sales_contract_add.php";
			break;
		case 'Sales-Contract-Files':
			if (!file_exists("sales_contract_files.php")) die("Sorry Empty Page!");
			include "sales_contract_files.php";
			break;
		case 'Sales-Contract-Files-Delete':
			if (!file_exists("sales_contract_files_delete.php")) die("Sorry Empty Page!");
			include "sales_contract_files_delete.php";
			break;


			# SPP
		case 'SPP':
			if (!file_exists("spp.php")) die("Sorry Empty Page!");
			include "spp.php";
			break;
		case 'SPP-Add':
			if (!file_exists("spp_add.php")) die("Sorry Empty Page!");
			include "spp_add.php";
			break;
		case 'SPP-Edit':
			if (!file_exists("spp_edit.php")) die("Sorry Empty Page!");
			include "spp_edit.php";
			break;
		case 'SPP-View':
			if (!file_exists("spp_view.php")) die("Sorry Empty Page!");
			include "spp_view.php";
			break;



			# Schedule Produksi
		case 'SP':
			if (!file_exists("sp.php")) die("Sorry Empty Page!");
			include "sp.php";
			break;
		case 'PDF-SP':
			if (!file_exists("pdf_sp.php")) die("Sorry Empty Page!");
			include "pdf_sp.php";
			break;

			# PMDK
		case 'Request':
			if (!file_exists("request.php")) die("Sorry Empty Page!");
			include "request.php";
			break;
		case 'Request-Add':
			if (!file_exists("request_add.php")) die("Sorry Empty Page!");
			include "request_add.php";
			break;
		case 'Request-Cancel':
			if (!file_exists("request_cancel.php")) die("Sorry Empty Page!");
			include "request_cancel.php";
			break;
		case 'Request-Edit':
			if (!file_exists("request_edit.php")) die("Sorry Empty Page!");
			include "request_edit.php";
			break;
		case 'Request-Detail':
			if (!file_exists("request_detail.php")) die("Sorry Empty Page!");
			include "request_detail.php";
			break;
		case 'Request-Detail-Edit':
			if (!file_exists("request_detail_edit.php")) die("Sorry Empty Page!");
			include "request_detail_edit.php";
			break;
		case 'Request-Material-Detail-Edit':
			if (!file_exists("request_material_detail_edit.php")) die("Sorry Empty Page!");
			include "request_material_detail_edit.php";
			break;
		case 'Request-Detail-Delete':
			if (!file_exists("request_detail_delete.php")) die("Sorry Empty Page!");
			include "request_detail_delete.php";
			break;
		case 'Request-Material-Detail-Delete':
			if (!file_exists("request_material_detail_delete.php")) die("Sorry Empty Page!");
			include "request_material_detail_delete.php";
			break;
		case 'Request-View':
			if (!file_exists("request_view.php")) die("Sorry Empty Page!");
			include "request_view.php";
			break;
		case 'Request-View-Archive':
			if (!file_exists("request_view_archive.php")) die("Sorry Empty Page!");
			include "request_view_archive.php";
			break;
		case 'Request-Version':
			if (!file_exists("request_version.php")) die("Sorry Empty Page!");
			include "request_version.php";
			break;
		case 'Request-Approval':
			if (!file_exists("request_approval.php")) die("Sorry Empty Page!");
			include "request_approval.php";
			break;
		case 'Request-Approval-Add':
			if (!file_exists("request_approval_add.php")) die("Sorry Empty Page!");
			include "request_approval_add.php";
			break;
		case 'Request-Status':
			if (!file_exists("request_status.php")) die("Sorry Empty Page!");
			include "request_status.php";
			break;
		case 'PDF-Request':
			if (!file_exists("pdf_request.php")) die("Sorry Empty Page!");
			include "pdf_request.php";
			break;


			# MASTER WORK ORDER / SPK
		case 'Work-Order':
			if (!file_exists("work_order.php")) die("Sorry Empty Page!");
			include "work_order.php";
			break;
		case 'Work-Order-Add':
			if (!file_exists("work_order_add.php")) die("Sorry Empty Page!");
			include "work_order_add.php";
			break;
		case 'Work-Order-View':
			if (!file_exists("work_order_view.php")) die("Sorry Empty Page!");
			include "work_order_view.php";
			break;
		case 'Work-Order-Edit':
			if (!file_exists("work_order_edit.php")) die("Sorry Empty Page!");
			include "work_order_edit.php";
			break;
		case 'Work-Order-Detail':
			if (!file_exists("work_order_detail.php")) die("Sorry Empty Page!");
			include "work_order_detail.php";
			break;
		case 'Work-Order-Detail-Delete':
			if (!file_exists("work_order_detail_delete.php")) die("Sorry Empty Page!");
			include "work_order_detail_delete.php";
			break;
		case 'PDF-Work-Order':
			if (!file_exists("pdf_work_order.php")) die("Sorry Empty Page!");
			include "pdf_work_order.php";
			break;



			# Delivery-Instruction
		case 'Delivery-Instruction':
			if (!file_exists("delivery_instruction.php")) die("Sorry Empty Page!");
			include "delivery_instruction.php";
			break;
		case 'Delivery-Instruction-Add':
			if (!file_exists("delivery_instruction_add.php")) die("Sorry Empty Page!");
			include "delivery_instruction_add.php";
			break;
		case 'Delivery-Instruction-View':
			if (!file_exists("delivery_instruction_view.php")) die("Sorry Empty Page!");
			include "delivery_instruction_view.php";
			break;
		case 'Delivery-Instruction-Edit':
			if (!file_exists("delivery_instruction_edit.php")) die("Sorry Empty Page!");
			include "delivery_instruction_edit.php";
			break;
		case 'Delivery-Instruction-Detail':
			if (!file_exists("delivery_instruction_detail.php")) die("Sorry Empty Page!");
			include "delivery_instruction_detail.php";
			break;
		case 'Delivery-Instruction-Detail-Delete':
			if (!file_exists("delivery_instruction_detail_delete.php")) die("Sorry Empty Page!");
			include "delivery_instruction_detail_delete.php";
			break;
		case 'PDF-Delivery-Instruction':
			if (!file_exists("pdf_delivery_instruction.php")) die("Sorry Empty Page!");
			include "pdf_delivery_instruction.php";
			break;
		case 'Delivery-Instruction-List':
			if (!file_exists("delivery_instruction_list.php")) die("Sorry Empty Page!");
			include "delivery_instruction_list.php";
			break;

			# Delivery-Order
		case 'Delivery-Order':
			if (!file_exists("delivery_order.php")) die("Sorry Empty Page!");
			include "delivery_order.php";
			break;
		case 'Delivery-Order-Add':
			if (!file_exists("delivery_order_add.php")) die("Sorry Empty Page!");
			include "delivery_order_add.php";
			break;
		case 'Delivery-Order-View':
			if (!file_exists("delivery_order_view.php")) die("Sorry Empty Page!");
			include "delivery_order_view.php";
			break;
		case 'Delivery-Order-Edit':
			if (!file_exists("delivery_order_edit.php")) die("Sorry Empty Page!");
			include "delivery_order_edit.php";
			break;
		case 'Delivery-Order-Task':
			if (!file_exists("delivery_order_task.php")) die("Sorry Empty Page!");
			include "delivery_order_task.php";
			break;
		case 'Delivery-Order-Detail':
			if (!file_exists("delivery_order_detail.php")) die("Sorry Empty Page!");
			include "delivery_order_detail.php";
			break;
		case 'Delivery-Order-Detail-Delete':
			if (!file_exists("delivery_order_detail_delete.php")) die("Sorry Empty Page!");
			include "delivery_order_detail_delete.php";
			break;
		case 'PDF-Delivery-Order':
			if (!file_exists("pdf_delivery_order.php")) die("Sorry Empty Page!");
			include "pdf_delivery_order.php";
			break;
		case 'PDF-Delivery-Order-Customer':
			if (!file_exists("pdf_delivery_order_customer.php")) die("Sorry Empty Page!");
			include "pdf_delivery_order_customer.php";
			break;

			# Stock-Order
		case 'Stock-Order':
			if (!file_exists("stock_order.php")) die("Sorry Empty Page!");
			include "stock_order.php";
			break;
		case 'Stock-Order-Add':
			if (!file_exists("stock_order_add.php")) die("Sorry Empty Page!");
			include "stock_order_add.php";
			break;
		case 'Stock-Order-View':
			if (!file_exists("stock_order_view.php")) die("Sorry Empty Page!");
			include "stock_order_view.php";
			break;
		case 'Stock-Order-Edit':
			if (!file_exists("stock_order_edit.php")) die("Sorry Empty Page!");
			include "stock_order_edit.php";
			break;
		case 'Stock-Order-Detail':
			if (!file_exists("stock_order_detail.php")) die("Sorry Empty Page!");
			include "stock_order_detail.php";
			break;
		case 'Stock-Order-Detail-Delete':
			if (!file_exists("stock_order_detail_delete.php")) die("Sorry Empty Page!");
			include "stock_order_detail_delete.php";
			break;
		case 'Stock-Order-Detail-Edit':
			if (!file_exists("stock_order_detail_edit.php")) die("Sorry Empty Page!");
			include "stock_order_detail_edit.php";
			break;
		case 'Stock-Order-Task':
			if (!file_exists("stock_order_task.php")) die("Sorry Empty Page!");
			include "stock_order_task.php";
			break;
		case 'Stock-Order-Picking':
			if (!file_exists("stock_order_picking.php")) die("Sorry Empty Page!");
			include "stock_order_picking.php";
			break;
		case 'Stock-Order-Confirm':
			if (!file_exists("stock_order_confirm.php")) die("Sorry Empty Page!");
			include "stock_order_confirm.php";
			break;
		case 'PDF-Stock-Order-IN':
			if (!file_exists("pdf_stock_order_in.php")) die("Sorry Empty Page!");
			include "pdf_stock_order_in.php";
			break;
		case 'PDF-Stock-Order-OUT':
			if (!file_exists("pdf_stock_order_out.php")) die("Sorry Empty Page!");
			include "pdf_stock_order_out.php";
			break;
		case 'PDF-Stock-Order-OUT-Draft':
			if (!file_exists("pdf_stock_order_out_draft.php")) die("Sorry Empty Page!");
			include "pdf_stock_order_out_draft.php";
			break;
		case 'Stock-Rack':
			if (!file_exists("stock_rack.php")) die("Sorry Empty Page!");
			include "stock_rack.php";
			break;
		case 'Stock-Warehouse':
			if (!file_exists("stock_warehouse.php")) die("Sorry Empty Page!");
			include "stock_warehouse.php";
			break;
		case 'Stock-Intransit':
			if (!file_exists("stock_intransit.php")) die("Sorry Empty Page!");
			include "stock_intransit.php";
			break;
		case 'Stock-Product':
			if (!file_exists("stock_product.php")) die("Sorry Empty Page!");
			include "stock_product.php";
			break;
		case 'Stock-Card':
			if (!file_exists("stock_card.php")) die("Sorry Empty Page!");
			include "stock_card.php";
			break;
		case 'Stock-Card-Rack':
			if (!file_exists("stock_card_rack.php")) die("Sorry Empty Page!");
			include "stock_card_rack.php";
			break;
		case 'Stock-Card-Product':
			if (!file_exists("stock_card_product.php")) die("Sorry Empty Page!");
			include "stock_card_product.php";
			break;
		case 'Stock-Adjustment':
			if (!file_exists("stock_adjustment.php")) die("Sorry Empty Page!");
			include "stock_adjustment.php";
			break;
		case 'Stock-Adjustment-Add-IN':
			if (!file_exists("stock_adjustment_add_in.php")) die("Sorry Empty Page!");
			include "stock_adjustment_add_in.php";
			break;
		case 'Stock-Adjustment-Add-OUT':
			if (!file_exists("stock_adjustment_add_out.php")) die("Sorry Empty Page!");
			include "stock_adjustment_add_out.php";
			break;
		case 'Stock-Transfer':
			if (!file_exists("stock_transfer.php")) die("Sorry Empty Page!");
			include "stock_transfer.php";
			break;
		case 'Stock-Transfer-Add':
			if (!file_exists("stock_transfer_add.php")) die("Sorry Empty Page!");
			include "stock_transfer_add.php";
			break;
		case 'Stock-Rack-Label':
			if (!file_exists("pdf_stock_rack_label.php")) die("Sorry Empty Page!");
			include "pdf_stock_rack_label.php";
			break;
		case 'Stock-Card-Label':
			if (!file_exists("pdf_stock_card_label.php")) die("Sorry Empty Page!");
			include "pdf_stock_card_label.php";
			break;
		case 'Stock-Request':
			if (!file_exists("stock_request.php")) die("Sorry Empty Page!");
			include "stock_request.php";
			break;
		case 'Stock-Request-Add':
			if (!file_exists("stock_request_add.php")) die("Sorry Empty Page!");
			include "stock_request_add.php";
			break;
		case 'Stock-Request-View':
			if (!file_exists("stock_request_view.php")) die("Sorry Empty Page!");
			include "stock_request_view.php";
			break;
		case 'Stock-Request-Edit':
			if (!file_exists("stock_request_edit.php")) die("Sorry Empty Page!");
			include "stock_request_edit.php";
			break;
		case 'Stock-Request-Detail':
			if (!file_exists("stock_request_detail.php")) die("Sorry Empty Page!");
			include "stock_request_detail.php";
			break;
		case 'Stock-Request-Status':
			if (!file_exists("stock_request_status.php")) die("Sorry Empty Page!");
			include "stock_request_status.php";
			break;
		case 'Stock-Request-Detail-Delete':
			if (!file_exists("stock_request_detail_delete.php")) die("Sorry Empty Page!");
			include "stock_request_detail_delete.php";
			break;
		case 'PDF-Stock-Request':
			if (!file_exists("pdf_stock_request.php")) die("Sorry Empty Page!");
			include "pdf_stock_request.php";
			break;

		case 'Stock-Receive':
			if (!file_exists("stock_receive.php")) die("Sorry Empty Page!");
			include "stock_receive.php";
			break;
		case 'Stock-Receive-Add':
			if (!file_exists("stock_receive_add.php")) die("Sorry Empty Page!");
			include "stock_receive_add.php";
			break;
		case 'Stock-Receive-View':
			if (!file_exists("stock_receive_view.php")) die("Sorry Empty Page!");
			include "stock_receive_view.php";
			break;
		case 'Stock-Receive-Edit':
			if (!file_exists("stock_request_edit.php")) die("Sorry Empty Page!");
			include "stock_request_edit.php";
			break;
		case 'Stock-Receive-Task':
			if (!file_exists("stock_receive_task.php")) die("Sorry Empty Page!");
			include "stock_receive_task.php";
			break;
		case 'Stock-Receive-Status':
			if (!file_exists("stock_receive_status.php")) die("Sorry Empty Page!");
			include "stock_receive_status.php";
			break;
		case 'Stock-Receive-Detail':
			if (!file_exists("stock_receive_detail.php")) die("Sorry Empty Page!");
			include "stock_receive_detail.php";
			break;
		case 'Stock-Receive-Detail-Delete':
			if (!file_exists("stock_receive_detail_delete.php")) die("Sorry Empty Page!");
			include "stock_receive_detail_delete.php";
			break;
		case 'PDF-Stock-Receive':
			if (!file_exists("pdf_stock_receive.php")) die("Sorry Empty Page!");
			include "pdf_stock_receive.php";
			break;

			# Billing		
		case 'Billing':
			if (!file_exists("billing.php")) die("Sorry Empty Page!");
			include "billing.php";
			break;
		case 'Billing-Add':
			if (!file_exists("billing_add.php")) die("Sorry Empty Page!");
			include "billing_add.php";
			break;
		case 'Billing-Delete':
			if (!file_exists("billing_delete.php")) die("Sorry Empty Page!");
			include "billing_delete.php";
			break;
		case 'Billing-Cancel':
			if (!file_exists("billing_cancel.php")) die("Sorry Empty Page!");
			include "billing_cancel.php";
			break;
		case 'Billing-Edit':
			if (!file_exists("billing_edit.php")) die("Sorry Empty Page!");
			include "billing_edit.php";
			break;
		case 'Billing-Detail':
			if (!file_exists("billing_detail.php")) die("Sorry Empty Page!");
			include "billing_detail.php";
			break;
		case 'Billing-Detail-Delete':
			if (!file_exists("billing_detail_delete.php")) die("Sorry Empty Page!");
			include "billing_detail_delete.php";
			break;
		case 'Billing-View':
			if (!file_exists("billing_view.php")) die("Sorry Empty Page!");
			include "billing_view.php";
			break;
		case 'Billing-View-Archive':
			if (!file_exists("billing_view_archive.php")) die("Sorry Empty Page!");
			include "billing_view_archive.php";
			break;
		case 'Billing-Report':
			if (!file_exists("billing_report.php")) die("Sorry Empty Page!");
			include "billing_report.php";
			break;
		case 'Billing-Validasi':
			if (!file_exists("billing_validasi.php")) die("Sorry Empty Page!");
			include "billing_validasi.php";
			break;
		case 'Billing-Version':
			if (!file_exists("billing_version.php")) die("Sorry Empty Page!");
			include "billing_version.php";
			break;
		case 'Billing-Files':
			if (!file_exists("billing_files.php")) die("Sorry Empty Page!");
			include "billing_files.php";
			break;
		case 'Billing-Files-Delete':
			if (!file_exists("billing_files_delete.php")) die("Sorry Empty Page!");
			include "billing_files_delete.php";
			break;
		case 'Billing-Approval':
			if (!file_exists("billing_approval.php")) die("Sorry Empty Page!");
			include "billing_approval.php";
			break;
		case 'Billing-Approval-Add':
			if (!file_exists("billing_approval_add.php")) die("Sorry Empty Page!");
			include "billing_approval_add.php";
			break;
		case 'Billing-Status':
			if (!file_exists("billing_status.php")) die("Sorry Empty Page!");
			include "billing_status.php";
			break;
		case 'PDF-Billing':
			if (!file_exists("pdf_billing.php")) die("Sorry Empty Page!");
			include "pdf_billing.php";
			break;

			# Payment		
		case 'Payment':
			if (!file_exists("payment.php")) die("Sorry Empty Page!");
			include "payment.php";
			break;
		case 'Payment-Add':
			if (!file_exists("payment_add.php")) die("Sorry Empty Page!");
			include "payment_add.php";
			break;
		case 'Payment-Edit':
			if (!file_exists("payment_edit.php")) die("Sorry Empty Page!");
			include "payment_edit.php";
			break;
		case 'Payment-View':
			if (!file_exists("payment_view.php")) die("Sorry Empty Page!");
			include "payment_view.php";
			break;

			# Goods-Order
		case 'Goods-Order':
			if (!file_exists("goods_order.php")) die("Sorry Empty Page!");
			include "goods_order.php";
			break;
		case 'Goods-Order-Add':
			if (!file_exists("goods_order_add.php")) die("Sorry Empty Page!");
			include "goods_order_add.php";
			break;
		case 'Goods-Order-View':
			if (!file_exists("goods_order_view.php")) die("Sorry Empty Page!");
			include "goods_order_view.php";
			break;
		case 'Goods-Order-Edit':
			if (!file_exists("goods_order_edit.php")) die("Sorry Empty Page!");
			include "goods_order_edit.php";
			break;
		case 'Goods-Order-Detail':
			if (!file_exists("goods_order_detail.php")) die("Sorry Empty Page!");
			include "goods_order_detail.php";
			break;
		case 'Goods-Order-Detail-Delete':
			if (!file_exists("goods_order_detail_delete.php")) die("Sorry Empty Page!");
			include "goods_order_detail_delete.php";
			break;
		case 'PDF-Goods-Order-IN':
			if (!file_exists("pdf_goods_order_in.php")) die("Sorry Empty Page!");
			include "pdf_goods_order_in.php";
			break;
		case 'PDF-Goods-Order-OUT':
			if (!file_exists("pdf_goods_order_out.php")) die("Sorry Empty Page!");
			include "pdf_goods_order_out.php";
			break;

		default:
			if (isset($_SESSION['SES_ADMIN'])) {
				if (!file_exists("main.php")) die("Sorry Empty Page!");
				include "main.php";
				break;
			}
			if (isset($_SESSION['SES_USER'])) {
				if (!file_exists("main_user.php")) die("Sorry Empty Page!");
				include "main_user.php";
				break;
			}
			break;
	}
} else {
	// Jika tidak mendapatkan variabel URL : ?page
	if (!file_exists("login.php")) die("Empty Main Page! Under Development");
	include "login.php";
}
