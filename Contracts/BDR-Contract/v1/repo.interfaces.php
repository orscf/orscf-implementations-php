<?php
/* based on ORSCF BillingData Contract v1.6.0.11538 */

use \MedicalResearch\BillingData\Model;

namespace MedicalResearch\BillingData\StoreAccess {
  
  public interface IBillableTasks {
    
    /*
    * Loads a specific BillableTask addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
    *
    * @param $taskGuid a global unique id of a concrete study-task execution which is usually originated at the primary CRF or study management system ('SMS')
    */
    function GetBillableTaskByTaskGuid(string $taskGuid): GetBillableTaskByTaskGuidResponse;
    
    /*
    * Loads BillableTasks.
    *
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of BillableTasks which should be returned
    */
    function GetBillableTasks(int $page, int $pageSize): GetBillableTasksResponse;
    
    /*
    * Loads BillableTasks where values matching to the given filterExpression
    *
    * @param $filterExpression a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    * @param $sortingExpression one or more property names which are used as sort order (before pagination)
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of BillableTasks which should be returned
    */
    function SearchBillableTasks(string $filterExpression, string $sortingExpression, int $page, int $pageSize): SearchBillableTasksResponse;
    
    /*
    * Adds a new BillableTask and returns its primary identifier (or null on failure).
    *
    * @param $billableTask BillableTask containing the new values
    */
    function AddNewBillableTask(BillableTask $billableTask): AddNewBillableTaskResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given BillableTask addressed by the primary identifier fields within the given BillableTask. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $billableTask BillableTask containing the new values (the primary identifier fields within the given BillableTask will be used to address the target record)
    */
    function UpdateBillableTask(BillableTask $billableTask): UpdateBillableTaskResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given BillableTask addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $taskGuid a global unique id of a concrete study-task execution which is usually originated at the primary CRF or study management system ('SMS')
    * @param $billableTask BillableTask containing the new values (the primary identifier fields within the given BillableTask will be ignored)
    */
    function UpdateBillableTaskByTaskGuid(string $taskGuid, BillableTask $billableTask): UpdateBillableTaskByTaskGuidResponse;
    
    /*
    * Deletes a specific BillableTask addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $taskGuid a global unique id of a concrete study-task execution which is usually originated at the primary CRF or study management system ('SMS')
    */
    function DeleteBillableTaskByTaskGuid(string $taskGuid): DeleteBillableTaskByTaskGuidResponse;
    
  }
  
  public interface IBillableVisits {
    
    /*
    * Loads a specific BillableVisit addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
    *
    * @param $visitGuid a global unique id of a concrete study-visit execution which is usually originated at the primary CRF or study management system ('SMS')
    */
    function GetBillableVisitByVisitGuid(string $visitGuid): GetBillableVisitByVisitGuidResponse;
    
    /*
    * Loads BillableVisits.
    *
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of BillableVisits which should be returned
    */
    function GetBillableVisits(int $page, int $pageSize): GetBillableVisitsResponse;
    
    /*
    * Loads BillableVisits where values matching to the given filterExpression
    *
    * @param $filterExpression a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    * @param $sortingExpression one or more property names which are used as sort order (before pagination)
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of BillableVisits which should be returned
    */
    function SearchBillableVisits(string $filterExpression, string $sortingExpression, int $page, int $pageSize): SearchBillableVisitsResponse;
    
    /*
    * Adds a new BillableVisit and returns its primary identifier (or null on failure).
    *
    * @param $billableVisit BillableVisit containing the new values
    */
    function AddNewBillableVisit(BillableVisit $billableVisit): AddNewBillableVisitResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given BillableVisit addressed by the primary identifier fields within the given BillableVisit. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $billableVisit BillableVisit containing the new values (the primary identifier fields within the given BillableVisit will be used to address the target record)
    */
    function UpdateBillableVisit(BillableVisit $billableVisit): UpdateBillableVisitResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given BillableVisit addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $visitGuid a global unique id of a concrete study-visit execution which is usually originated at the primary CRF or study management system ('SMS')
    * @param $billableVisit BillableVisit containing the new values (the primary identifier fields within the given BillableVisit will be ignored)
    */
    function UpdateBillableVisitByVisitGuid(string $visitGuid, BillableVisit $billableVisit): UpdateBillableVisitByVisitGuidResponse;
    
    /*
    * Deletes a specific BillableVisit addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $visitGuid a global unique id of a concrete study-visit execution which is usually originated at the primary CRF or study management system ('SMS')
    */
    function DeleteBillableVisitByVisitGuid(string $visitGuid): DeleteBillableVisitByVisitGuidResponse;
    
  }
  
  public interface IStudyExecutionScopes {
    
    /*
    * Loads a specific StudyExecutionScope addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
    *
    * @param $studyExecutionIdentifier a global unique id of a concrete study execution (dedicated to a concrete institute) which is usually originated at the primary CRF or study management system ('SMS')
    */
    function GetStudyExecutionScopeByStudyExecutionIdentifier(string $studyExecutionIdentifier): GetStudyExecutionScopeByStudyExecutionIdentifierResponse;
    
    /*
    * Loads StudyExecutionScopes.
    *
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of StudyExecutionScopes which should be returned
    */
    function GetStudyExecutionScopes(int $page, int $pageSize): GetStudyExecutionScopesResponse;
    
    /*
    * Loads StudyExecutionScopes where values matching to the given filterExpression
    *
    * @param $filterExpression a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    * @param $sortingExpression one or more property names which are used as sort order (before pagination)
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of StudyExecutionScopes which should be returned
    */
    function SearchStudyExecutionScopes(string $filterExpression, string $sortingExpression, int $page, int $pageSize): SearchStudyExecutionScopesResponse;
    
    /*
    * Adds a new StudyExecutionScope and returns its primary identifier (or null on failure).
    *
    * @param $studyExecutionScope StudyExecutionScope containing the new values
    */
    function AddNewStudyExecutionScope(StudyExecutionScope $studyExecutionScope): AddNewStudyExecutionScopeResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given StudyExecutionScope addressed by the primary identifier fields within the given StudyExecutionScope. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $studyExecutionScope StudyExecutionScope containing the new values (the primary identifier fields within the given StudyExecutionScope will be used to address the target record)
    */
    function UpdateStudyExecutionScope(StudyExecutionScope $studyExecutionScope): UpdateStudyExecutionScopeResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given StudyExecutionScope addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $studyExecutionIdentifier a global unique id of a concrete study execution (dedicated to a concrete institute) which is usually originated at the primary CRF or study management system ('SMS')
    * @param $studyExecutionScope StudyExecutionScope containing the new values (the primary identifier fields within the given StudyExecutionScope will be ignored)
    */
    function UpdateStudyExecutionScopeByStudyExecutionIdentifier(string $studyExecutionIdentifier, StudyExecutionScope $studyExecutionScope): UpdateStudyExecutionScopeByStudyExecutionIdentifierResponse;
    
    /*
    * Deletes a specific StudyExecutionScope addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $studyExecutionIdentifier a global unique id of a concrete study execution (dedicated to a concrete institute) which is usually originated at the primary CRF or study management system ('SMS')
    */
    function DeleteStudyExecutionScopeByStudyExecutionIdentifier(string $studyExecutionIdentifier): DeleteStudyExecutionScopeByStudyExecutionIdentifierResponse;
    
  }
  
  public interface IBillingDemands {
    
    /*
    * Loads a specific BillingDemand addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
    *
    * @param $id Represents the primary identity of a BillingDemand
    */
    function GetBillingDemandById(string $id): GetBillingDemandByIdResponse;
    
    /*
    * Loads BillingDemands.
    *
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of BillingDemands which should be returned
    */
    function GetBillingDemands(int $page, int $pageSize): GetBillingDemandsResponse;
    
    /*
    * Loads BillingDemands where values matching to the given filterExpression
    *
    * @param $filterExpression a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    * @param $sortingExpression one or more property names which are used as sort order (before pagination)
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of BillingDemands which should be returned
    */
    function SearchBillingDemands(string $filterExpression, string $sortingExpression, int $page, int $pageSize): SearchBillingDemandsResponse;
    
    /*
    * Adds a new BillingDemand and returns its primary identifier (or null on failure).
    *
    * @param $billingDemand BillingDemand containing the new values
    */
    function AddNewBillingDemand(BillingDemand $billingDemand): AddNewBillingDemandResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given BillingDemand addressed by the primary identifier fields within the given BillingDemand. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $billingDemand BillingDemand containing the new values (the primary identifier fields within the given BillingDemand will be used to address the target record)
    */
    function UpdateBillingDemand(BillingDemand $billingDemand): UpdateBillingDemandResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given BillingDemand addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $id Represents the primary identity of a BillingDemand
    * @param $billingDemand BillingDemand containing the new values (the primary identifier fields within the given BillingDemand will be ignored)
    */
    function UpdateBillingDemandById(string $id, BillingDemand $billingDemand): UpdateBillingDemandByIdResponse;
    
    /*
    * Deletes a specific BillingDemand addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $id Represents the primary identity of a BillingDemand
    */
    function DeleteBillingDemandById(string $id): DeleteBillingDemandByIdResponse;
    
  }
  
  public interface IInvoices {
    
    /*
    * Loads a specific Invoice addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
    *
    * @param $id Represents the primary identity of a Invoice
    */
    function GetInvoiceById(string $id): GetInvoiceByIdResponse;
    
    /*
    * Loads Invoices.
    *
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of Invoices which should be returned
    */
    function GetInvoices(int $page, int $pageSize): GetInvoicesResponse;
    
    /*
    * Loads Invoices where values matching to the given filterExpression
    *
    * @param $filterExpression a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    * @param $sortingExpression one or more property names which are used as sort order (before pagination)
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of Invoices which should be returned
    */
    function SearchInvoices(string $filterExpression, string $sortingExpression, int $page, int $pageSize): SearchInvoicesResponse;
    
    /*
    * Adds a new Invoice and returns its primary identifier (or null on failure).
    *
    * @param $invoice Invoice containing the new values
    */
    function AddNewInvoice(Invoice $invoice): AddNewInvoiceResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given Invoice addressed by the primary identifier fields within the given Invoice. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $invoice Invoice containing the new values (the primary identifier fields within the given Invoice will be used to address the target record)
    */
    function UpdateInvoice(Invoice $invoice): UpdateInvoiceResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given Invoice addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $id Represents the primary identity of a Invoice
    * @param $invoice Invoice containing the new values (the primary identifier fields within the given Invoice will be ignored)
    */
    function UpdateInvoiceById(string $id, Invoice $invoice): UpdateInvoiceByIdResponse;
    
    /*
    * Deletes a specific Invoice addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $id Represents the primary identity of a Invoice
    */
    function DeleteInvoiceById(string $id): DeleteInvoiceByIdResponse;
    
  }
  
}
