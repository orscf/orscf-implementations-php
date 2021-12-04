<?php
/* based on ORSCF BillingData Contract v1.6.0.11538 */

use \MedicalResearch\BillingData\Model;

namespace MedicalResearch\BillingData\StoreAccess {
  
  /*
  * Contains arguments for calling 'GetBillableTaskByTaskGuid'.
  * Method: Loads a specific BillableTask addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
  */
  public class GetBillableTaskByTaskGuidRequest {
    
    // Required Argument for 'GetBillableTaskByTaskGuid' (string): a global unique id of a concrete study-task execution which is usually originated at the primary CRF or study management system ('SMS')
    #[Required]
    public string $taskGuid;
    
  }
  
  /*
  * Contains results from calling 'GetBillableTaskByTaskGuid'.
  * Method: Loads a specific BillableTask addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
  */
  public class GetBillableTaskByTaskGuidResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'GetBillableTaskByTaskGuid' (BillableTask)
    public BillableTask $return;
    
  }
  
  /*
  * Contains arguments for calling 'GetBillableTasks'.
  * Method: Loads BillableTasks.
  */
  public class GetBillableTasksRequest {
    
    // Optional Argument for 'GetBillableTasks' (?int): Number of the page, which should be returned
    public ?int $page = null;
    
    // Optional Argument for 'GetBillableTasks' (?int): Max count of BillableTasks which should be returned
    public ?int $pageSize = null;
    
  }
  
  /*
  * Contains results from calling 'GetBillableTasks'.
  * Method: Loads BillableTasks.
  */
  public class GetBillableTasksResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'GetBillableTasks' (BillableTask[])
    public array $return;
    
  }
  
  /*
  * Contains arguments for calling 'SearchBillableTasks'.
  * Method: Loads BillableTasks where values matching to the given filterExpression
  */
  public class SearchBillableTasksRequest {
    
    // Required Argument for 'SearchBillableTasks' (string): a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    #[Required]
    public string $filterExpression;
    
    // Optional Argument for 'SearchBillableTasks' (string): one or more property names which are used as sort order (before pagination)
    public string $sortingExpression;
    
    // Optional Argument for 'SearchBillableTasks' (?int): Number of the page, which should be returned
    public ?int $page = null;
    
    // Optional Argument for 'SearchBillableTasks' (?int): Max count of BillableTasks which should be returned
    public ?int $pageSize = null;
    
  }
  
  /*
  * Contains results from calling 'SearchBillableTasks'.
  * Method: Loads BillableTasks where values matching to the given filterExpression
  */
  public class SearchBillableTasksResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'SearchBillableTasks' (BillableTask[])
    public array $return;
    
  }
  
  /*
  * Contains arguments for calling 'AddNewBillableTask'.
  * Method: Adds a new BillableTask and returns its primary identifier (or null on failure).
  */
  public class AddNewBillableTaskRequest {
    
    // Required Argument for 'AddNewBillableTask' (BillableTask): BillableTask containing the new values
    #[Required]
    public BillableTask $billableTask;
    
  }
  
  /*
  * Contains results from calling 'AddNewBillableTask'.
  * Method: Adds a new BillableTask and returns its primary identifier (or null on failure).
  */
  public class AddNewBillableTaskResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'AddNewBillableTask' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'UpdateBillableTask'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given BillableTask addressed by the primary identifier fields within the given BillableTask. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateBillableTaskRequest {
    
    // Required Argument for 'UpdateBillableTask' (BillableTask): BillableTask containing the new values (the primary identifier fields within the given BillableTask will be used to address the target record)
    #[Required]
    public BillableTask $billableTask;
    
  }
  
  /*
  * Contains results from calling 'UpdateBillableTask'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given BillableTask addressed by the primary identifier fields within the given BillableTask. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateBillableTaskResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'UpdateBillableTask' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'UpdateBillableTaskByTaskGuid'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given BillableTask addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateBillableTaskByTaskGuidRequest {
    
    // Required Argument for 'UpdateBillableTaskByTaskGuid' (string): a global unique id of a concrete study-task execution which is usually originated at the primary CRF or study management system ('SMS')
    #[Required]
    public string $taskGuid;
    
    // Required Argument for 'UpdateBillableTaskByTaskGuid' (BillableTask): BillableTask containing the new values (the primary identifier fields within the given BillableTask will be ignored)
    #[Required]
    public BillableTask $billableTask;
    
  }
  
  /*
  * Contains results from calling 'UpdateBillableTaskByTaskGuid'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given BillableTask addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateBillableTaskByTaskGuidResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'UpdateBillableTaskByTaskGuid' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'DeleteBillableTaskByTaskGuid'.
  * Method: Deletes a specific BillableTask addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class DeleteBillableTaskByTaskGuidRequest {
    
    // Required Argument for 'DeleteBillableTaskByTaskGuid' (string): a global unique id of a concrete study-task execution which is usually originated at the primary CRF or study management system ('SMS')
    #[Required]
    public string $taskGuid;
    
  }
  
  /*
  * Contains results from calling 'DeleteBillableTaskByTaskGuid'.
  * Method: Deletes a specific BillableTask addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class DeleteBillableTaskByTaskGuidResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'DeleteBillableTaskByTaskGuid' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'GetBillableVisitByVisitGuid'.
  * Method: Loads a specific BillableVisit addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
  */
  public class GetBillableVisitByVisitGuidRequest {
    
    // Required Argument for 'GetBillableVisitByVisitGuid' (string): a global unique id of a concrete study-visit execution which is usually originated at the primary CRF or study management system ('SMS')
    #[Required]
    public string $visitGuid;
    
  }
  
  /*
  * Contains results from calling 'GetBillableVisitByVisitGuid'.
  * Method: Loads a specific BillableVisit addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
  */
  public class GetBillableVisitByVisitGuidResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'GetBillableVisitByVisitGuid' (BillableVisit)
    public BillableVisit $return;
    
  }
  
  /*
  * Contains arguments for calling 'GetBillableVisits'.
  * Method: Loads BillableVisits.
  */
  public class GetBillableVisitsRequest {
    
    // Optional Argument for 'GetBillableVisits' (?int): Number of the page, which should be returned
    public ?int $page = null;
    
    // Optional Argument for 'GetBillableVisits' (?int): Max count of BillableVisits which should be returned
    public ?int $pageSize = null;
    
  }
  
  /*
  * Contains results from calling 'GetBillableVisits'.
  * Method: Loads BillableVisits.
  */
  public class GetBillableVisitsResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'GetBillableVisits' (BillableVisit[])
    public array $return;
    
  }
  
  /*
  * Contains arguments for calling 'SearchBillableVisits'.
  * Method: Loads BillableVisits where values matching to the given filterExpression
  */
  public class SearchBillableVisitsRequest {
    
    // Required Argument for 'SearchBillableVisits' (string): a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    #[Required]
    public string $filterExpression;
    
    // Optional Argument for 'SearchBillableVisits' (string): one or more property names which are used as sort order (before pagination)
    public string $sortingExpression;
    
    // Optional Argument for 'SearchBillableVisits' (?int): Number of the page, which should be returned
    public ?int $page = null;
    
    // Optional Argument for 'SearchBillableVisits' (?int): Max count of BillableVisits which should be returned
    public ?int $pageSize = null;
    
  }
  
  /*
  * Contains results from calling 'SearchBillableVisits'.
  * Method: Loads BillableVisits where values matching to the given filterExpression
  */
  public class SearchBillableVisitsResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'SearchBillableVisits' (BillableVisit[])
    public array $return;
    
  }
  
  /*
  * Contains arguments for calling 'AddNewBillableVisit'.
  * Method: Adds a new BillableVisit and returns its primary identifier (or null on failure).
  */
  public class AddNewBillableVisitRequest {
    
    // Required Argument for 'AddNewBillableVisit' (BillableVisit): BillableVisit containing the new values
    #[Required]
    public BillableVisit $billableVisit;
    
  }
  
  /*
  * Contains results from calling 'AddNewBillableVisit'.
  * Method: Adds a new BillableVisit and returns its primary identifier (or null on failure).
  */
  public class AddNewBillableVisitResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'AddNewBillableVisit' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'UpdateBillableVisit'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given BillableVisit addressed by the primary identifier fields within the given BillableVisit. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateBillableVisitRequest {
    
    // Required Argument for 'UpdateBillableVisit' (BillableVisit): BillableVisit containing the new values (the primary identifier fields within the given BillableVisit will be used to address the target record)
    #[Required]
    public BillableVisit $billableVisit;
    
  }
  
  /*
  * Contains results from calling 'UpdateBillableVisit'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given BillableVisit addressed by the primary identifier fields within the given BillableVisit. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateBillableVisitResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'UpdateBillableVisit' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'UpdateBillableVisitByVisitGuid'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given BillableVisit addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateBillableVisitByVisitGuidRequest {
    
    // Required Argument for 'UpdateBillableVisitByVisitGuid' (string): a global unique id of a concrete study-visit execution which is usually originated at the primary CRF or study management system ('SMS')
    #[Required]
    public string $visitGuid;
    
    // Required Argument for 'UpdateBillableVisitByVisitGuid' (BillableVisit): BillableVisit containing the new values (the primary identifier fields within the given BillableVisit will be ignored)
    #[Required]
    public BillableVisit $billableVisit;
    
  }
  
  /*
  * Contains results from calling 'UpdateBillableVisitByVisitGuid'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given BillableVisit addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateBillableVisitByVisitGuidResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'UpdateBillableVisitByVisitGuid' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'DeleteBillableVisitByVisitGuid'.
  * Method: Deletes a specific BillableVisit addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class DeleteBillableVisitByVisitGuidRequest {
    
    // Required Argument for 'DeleteBillableVisitByVisitGuid' (string): a global unique id of a concrete study-visit execution which is usually originated at the primary CRF or study management system ('SMS')
    #[Required]
    public string $visitGuid;
    
  }
  
  /*
  * Contains results from calling 'DeleteBillableVisitByVisitGuid'.
  * Method: Deletes a specific BillableVisit addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class DeleteBillableVisitByVisitGuidResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'DeleteBillableVisitByVisitGuid' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'GetStudyExecutionScopeByStudyExecutionIdentifier'.
  * Method: Loads a specific StudyExecutionScope addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
  */
  public class GetStudyExecutionScopeByStudyExecutionIdentifierRequest {
    
    // Required Argument for 'GetStudyExecutionScopeByStudyExecutionIdentifier' (string): a global unique id of a concrete study execution (dedicated to a concrete institute) which is usually originated at the primary CRF or study management system ('SMS')
    #[Required]
    public string $studyExecutionIdentifier;
    
  }
  
  /*
  * Contains results from calling 'GetStudyExecutionScopeByStudyExecutionIdentifier'.
  * Method: Loads a specific StudyExecutionScope addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
  */
  public class GetStudyExecutionScopeByStudyExecutionIdentifierResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'GetStudyExecutionScopeByStudyExecutionIdentifier' (StudyExecutionScope)
    public StudyExecutionScope $return;
    
  }
  
  /*
  * Contains arguments for calling 'GetStudyExecutionScopes'.
  * Method: Loads StudyExecutionScopes.
  */
  public class GetStudyExecutionScopesRequest {
    
    // Optional Argument for 'GetStudyExecutionScopes' (?int): Number of the page, which should be returned
    public ?int $page = null;
    
    // Optional Argument for 'GetStudyExecutionScopes' (?int): Max count of StudyExecutionScopes which should be returned
    public ?int $pageSize = null;
    
  }
  
  /*
  * Contains results from calling 'GetStudyExecutionScopes'.
  * Method: Loads StudyExecutionScopes.
  */
  public class GetStudyExecutionScopesResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'GetStudyExecutionScopes' (StudyExecutionScope[])
    public array $return;
    
  }
  
  /*
  * Contains arguments for calling 'SearchStudyExecutionScopes'.
  * Method: Loads StudyExecutionScopes where values matching to the given filterExpression
  */
  public class SearchStudyExecutionScopesRequest {
    
    // Required Argument for 'SearchStudyExecutionScopes' (string): a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    #[Required]
    public string $filterExpression;
    
    // Optional Argument for 'SearchStudyExecutionScopes' (string): one or more property names which are used as sort order (before pagination)
    public string $sortingExpression;
    
    // Optional Argument for 'SearchStudyExecutionScopes' (?int): Number of the page, which should be returned
    public ?int $page = null;
    
    // Optional Argument for 'SearchStudyExecutionScopes' (?int): Max count of StudyExecutionScopes which should be returned
    public ?int $pageSize = null;
    
  }
  
  /*
  * Contains results from calling 'SearchStudyExecutionScopes'.
  * Method: Loads StudyExecutionScopes where values matching to the given filterExpression
  */
  public class SearchStudyExecutionScopesResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'SearchStudyExecutionScopes' (StudyExecutionScope[])
    public array $return;
    
  }
  
  /*
  * Contains arguments for calling 'AddNewStudyExecutionScope'.
  * Method: Adds a new StudyExecutionScope and returns its primary identifier (or null on failure).
  */
  public class AddNewStudyExecutionScopeRequest {
    
    // Required Argument for 'AddNewStudyExecutionScope' (StudyExecutionScope): StudyExecutionScope containing the new values
    #[Required]
    public StudyExecutionScope $studyExecutionScope;
    
  }
  
  /*
  * Contains results from calling 'AddNewStudyExecutionScope'.
  * Method: Adds a new StudyExecutionScope and returns its primary identifier (or null on failure).
  */
  public class AddNewStudyExecutionScopeResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'AddNewStudyExecutionScope' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'UpdateStudyExecutionScope'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given StudyExecutionScope addressed by the primary identifier fields within the given StudyExecutionScope. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateStudyExecutionScopeRequest {
    
    // Required Argument for 'UpdateStudyExecutionScope' (StudyExecutionScope): StudyExecutionScope containing the new values (the primary identifier fields within the given StudyExecutionScope will be used to address the target record)
    #[Required]
    public StudyExecutionScope $studyExecutionScope;
    
  }
  
  /*
  * Contains results from calling 'UpdateStudyExecutionScope'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given StudyExecutionScope addressed by the primary identifier fields within the given StudyExecutionScope. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateStudyExecutionScopeResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'UpdateStudyExecutionScope' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'UpdateStudyExecutionScopeByStudyExecutionIdentifier'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given StudyExecutionScope addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateStudyExecutionScopeByStudyExecutionIdentifierRequest {
    
    // Required Argument for 'UpdateStudyExecutionScopeByStudyExecutionIdentifier' (string): a global unique id of a concrete study execution (dedicated to a concrete institute) which is usually originated at the primary CRF or study management system ('SMS')
    #[Required]
    public string $studyExecutionIdentifier;
    
    // Required Argument for 'UpdateStudyExecutionScopeByStudyExecutionIdentifier' (StudyExecutionScope): StudyExecutionScope containing the new values (the primary identifier fields within the given StudyExecutionScope will be ignored)
    #[Required]
    public StudyExecutionScope $studyExecutionScope;
    
  }
  
  /*
  * Contains results from calling 'UpdateStudyExecutionScopeByStudyExecutionIdentifier'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given StudyExecutionScope addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateStudyExecutionScopeByStudyExecutionIdentifierResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'UpdateStudyExecutionScopeByStudyExecutionIdentifier' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'DeleteStudyExecutionScopeByStudyExecutionIdentifier'.
  * Method: Deletes a specific StudyExecutionScope addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class DeleteStudyExecutionScopeByStudyExecutionIdentifierRequest {
    
    // Required Argument for 'DeleteStudyExecutionScopeByStudyExecutionIdentifier' (string): a global unique id of a concrete study execution (dedicated to a concrete institute) which is usually originated at the primary CRF or study management system ('SMS')
    #[Required]
    public string $studyExecutionIdentifier;
    
  }
  
  /*
  * Contains results from calling 'DeleteStudyExecutionScopeByStudyExecutionIdentifier'.
  * Method: Deletes a specific StudyExecutionScope addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class DeleteStudyExecutionScopeByStudyExecutionIdentifierResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'DeleteStudyExecutionScopeByStudyExecutionIdentifier' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'GetBillingDemandById'.
  * Method: Loads a specific BillingDemand addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
  */
  public class GetBillingDemandByIdRequest {
    
    // Required Argument for 'GetBillingDemandById' (string): Represents the primary identity of a BillingDemand
    #[Required]
    public string $id;
    
  }
  
  /*
  * Contains results from calling 'GetBillingDemandById'.
  * Method: Loads a specific BillingDemand addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
  */
  public class GetBillingDemandByIdResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'GetBillingDemandById' (BillingDemand): created by the sponsor
    public BillingDemand $return;
    
  }
  
  /*
  * Contains arguments for calling 'GetBillingDemands'.
  * Method: Loads BillingDemands.
  */
  public class GetBillingDemandsRequest {
    
    // Optional Argument for 'GetBillingDemands' (?int): Number of the page, which should be returned
    public ?int $page = null;
    
    // Optional Argument for 'GetBillingDemands' (?int): Max count of BillingDemands which should be returned
    public ?int $pageSize = null;
    
  }
  
  /*
  * Contains results from calling 'GetBillingDemands'.
  * Method: Loads BillingDemands.
  */
  public class GetBillingDemandsResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'GetBillingDemands' (BillingDemand[]): created by the sponsor
    public array $return;
    
  }
  
  /*
  * Contains arguments for calling 'SearchBillingDemands'.
  * Method: Loads BillingDemands where values matching to the given filterExpression
  */
  public class SearchBillingDemandsRequest {
    
    // Required Argument for 'SearchBillingDemands' (string): a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    #[Required]
    public string $filterExpression;
    
    // Optional Argument for 'SearchBillingDemands' (string): one or more property names which are used as sort order (before pagination)
    public string $sortingExpression;
    
    // Optional Argument for 'SearchBillingDemands' (?int): Number of the page, which should be returned
    public ?int $page = null;
    
    // Optional Argument for 'SearchBillingDemands' (?int): Max count of BillingDemands which should be returned
    public ?int $pageSize = null;
    
  }
  
  /*
  * Contains results from calling 'SearchBillingDemands'.
  * Method: Loads BillingDemands where values matching to the given filterExpression
  */
  public class SearchBillingDemandsResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'SearchBillingDemands' (BillingDemand[]): created by the sponsor
    public array $return;
    
  }
  
  /*
  * Contains arguments for calling 'AddNewBillingDemand'.
  * Method: Adds a new BillingDemand and returns its primary identifier (or null on failure).
  */
  public class AddNewBillingDemandRequest {
    
    // Required Argument for 'AddNewBillingDemand' (BillingDemand): BillingDemand containing the new values
    #[Required]
    public BillingDemand $billingDemand;
    
  }
  
  /*
  * Contains results from calling 'AddNewBillingDemand'.
  * Method: Adds a new BillingDemand and returns its primary identifier (or null on failure).
  */
  public class AddNewBillingDemandResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'AddNewBillingDemand' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'UpdateBillingDemand'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given BillingDemand addressed by the primary identifier fields within the given BillingDemand. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateBillingDemandRequest {
    
    // Required Argument for 'UpdateBillingDemand' (BillingDemand): BillingDemand containing the new values (the primary identifier fields within the given BillingDemand will be used to address the target record)
    #[Required]
    public BillingDemand $billingDemand;
    
  }
  
  /*
  * Contains results from calling 'UpdateBillingDemand'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given BillingDemand addressed by the primary identifier fields within the given BillingDemand. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateBillingDemandResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'UpdateBillingDemand' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'UpdateBillingDemandById'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given BillingDemand addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateBillingDemandByIdRequest {
    
    // Required Argument for 'UpdateBillingDemandById' (string): Represents the primary identity of a BillingDemand
    #[Required]
    public string $id;
    
    // Required Argument for 'UpdateBillingDemandById' (BillingDemand): BillingDemand containing the new values (the primary identifier fields within the given BillingDemand will be ignored)
    #[Required]
    public BillingDemand $billingDemand;
    
  }
  
  /*
  * Contains results from calling 'UpdateBillingDemandById'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given BillingDemand addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateBillingDemandByIdResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'UpdateBillingDemandById' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'DeleteBillingDemandById'.
  * Method: Deletes a specific BillingDemand addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class DeleteBillingDemandByIdRequest {
    
    // Required Argument for 'DeleteBillingDemandById' (string): Represents the primary identity of a BillingDemand
    #[Required]
    public string $id;
    
  }
  
  /*
  * Contains results from calling 'DeleteBillingDemandById'.
  * Method: Deletes a specific BillingDemand addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class DeleteBillingDemandByIdResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'DeleteBillingDemandById' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'GetInvoiceById'.
  * Method: Loads a specific Invoice addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
  */
  public class GetInvoiceByIdRequest {
    
    // Required Argument for 'GetInvoiceById' (string): Represents the primary identity of a Invoice
    #[Required]
    public string $id;
    
  }
  
  /*
  * Contains results from calling 'GetInvoiceById'.
  * Method: Loads a specific Invoice addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
  */
  public class GetInvoiceByIdResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'GetInvoiceById' (Invoice): created by the executor-company
    public Invoice $return;
    
  }
  
  /*
  * Contains arguments for calling 'GetInvoices'.
  * Method: Loads Invoices.
  */
  public class GetInvoicesRequest {
    
    // Optional Argument for 'GetInvoices' (?int): Number of the page, which should be returned
    public ?int $page = null;
    
    // Optional Argument for 'GetInvoices' (?int): Max count of Invoices which should be returned
    public ?int $pageSize = null;
    
  }
  
  /*
  * Contains results from calling 'GetInvoices'.
  * Method: Loads Invoices.
  */
  public class GetInvoicesResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'GetInvoices' (Invoice[]): created by the executor-company
    public array $return;
    
  }
  
  /*
  * Contains arguments for calling 'SearchInvoices'.
  * Method: Loads Invoices where values matching to the given filterExpression
  */
  public class SearchInvoicesRequest {
    
    // Required Argument for 'SearchInvoices' (string): a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    #[Required]
    public string $filterExpression;
    
    // Optional Argument for 'SearchInvoices' (string): one or more property names which are used as sort order (before pagination)
    public string $sortingExpression;
    
    // Optional Argument for 'SearchInvoices' (?int): Number of the page, which should be returned
    public ?int $page = null;
    
    // Optional Argument for 'SearchInvoices' (?int): Max count of Invoices which should be returned
    public ?int $pageSize = null;
    
  }
  
  /*
  * Contains results from calling 'SearchInvoices'.
  * Method: Loads Invoices where values matching to the given filterExpression
  */
  public class SearchInvoicesResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'SearchInvoices' (Invoice[]): created by the executor-company
    public array $return;
    
  }
  
  /*
  * Contains arguments for calling 'AddNewInvoice'.
  * Method: Adds a new Invoice and returns its primary identifier (or null on failure).
  */
  public class AddNewInvoiceRequest {
    
    // Required Argument for 'AddNewInvoice' (Invoice): Invoice containing the new values
    #[Required]
    public Invoice $invoice;
    
  }
  
  /*
  * Contains results from calling 'AddNewInvoice'.
  * Method: Adds a new Invoice and returns its primary identifier (or null on failure).
  */
  public class AddNewInvoiceResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'AddNewInvoice' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'UpdateInvoice'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given Invoice addressed by the primary identifier fields within the given Invoice. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateInvoiceRequest {
    
    // Required Argument for 'UpdateInvoice' (Invoice): Invoice containing the new values (the primary identifier fields within the given Invoice will be used to address the target record)
    #[Required]
    public Invoice $invoice;
    
  }
  
  /*
  * Contains results from calling 'UpdateInvoice'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given Invoice addressed by the primary identifier fields within the given Invoice. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateInvoiceResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'UpdateInvoice' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'UpdateInvoiceById'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given Invoice addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateInvoiceByIdRequest {
    
    // Required Argument for 'UpdateInvoiceById' (string): Represents the primary identity of a Invoice
    #[Required]
    public string $id;
    
    // Required Argument for 'UpdateInvoiceById' (Invoice): Invoice containing the new values (the primary identifier fields within the given Invoice will be ignored)
    #[Required]
    public Invoice $invoice;
    
  }
  
  /*
  * Contains results from calling 'UpdateInvoiceById'.
  * Method: Updates all values (which are not "FixedAfterCreation") of the given Invoice addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class UpdateInvoiceByIdResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'UpdateInvoiceById' (Boolean)
    public bool $return;
    
  }
  
  /*
  * Contains arguments for calling 'DeleteInvoiceById'.
  * Method: Deletes a specific Invoice addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class DeleteInvoiceByIdRequest {
    
    // Required Argument for 'DeleteInvoiceById' (string): Represents the primary identity of a Invoice
    #[Required]
    public string $id;
    
  }
  
  /*
  * Contains results from calling 'DeleteInvoiceById'.
  * Method: Deletes a specific Invoice addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
  */
  public class DeleteInvoiceByIdResponse {
    
    // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
    public string $fault = null;
    
    // Return-Value of 'DeleteInvoiceById' (Boolean)
    public bool $return;
    
  }
  
}
