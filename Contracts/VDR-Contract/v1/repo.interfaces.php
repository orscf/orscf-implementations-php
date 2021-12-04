<?php
/* based on ORSCF VisitData Contract v1.6.0.0 */

use \MedicalResearch\VisitData\Model;

namespace MedicalResearch\VisitData\StoreAccess {
  
  public interface IDataRecordings {
    
    /*
    * Loads a specific DataRecording addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
    *
    * @param $taskGuid a global unique id of a concrete study-task execution which is usually originated at the primary CRF or study management system ('SMS')
    */
    function GetDataRecordingByTaskGuid(string $taskGuid): GetDataRecordingByTaskGuidResponse;
    
    /*
    * Loads DataRecordings.
    *
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of DataRecordings which should be returned
    */
    function GetDataRecordings(int $page, int $pageSize): GetDataRecordingsResponse;
    
    /*
    * Loads DataRecordings where values matching to the given filterExpression
    *
    * @param $filterExpression a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    * @param $sortingExpression one or more property names which are used as sort order (before pagination)
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of DataRecordings which should be returned
    */
    function SearchDataRecordings(string $filterExpression, string $sortingExpression, int $page, int $pageSize): SearchDataRecordingsResponse;
    
    /*
    * Adds a new DataRecording and returns its primary identifier (or null on failure).
    *
    * @param $dataRecording DataRecording containing the new values
    */
    function AddNewDataRecording(DataRecording $dataRecording): AddNewDataRecordingResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given DataRecording addressed by the primary identifier fields within the given DataRecording. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $dataRecording DataRecording containing the new values (the primary identifier fields within the given DataRecording will be used to address the target record)
    */
    function UpdateDataRecording(DataRecording $dataRecording): UpdateDataRecordingResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given DataRecording addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $taskGuid a global unique id of a concrete study-task execution which is usually originated at the primary CRF or study management system ('SMS')
    * @param $dataRecording DataRecording containing the new values (the primary identifier fields within the given DataRecording will be ignored)
    */
    function UpdateDataRecordingByTaskGuid(string $taskGuid, DataRecording $dataRecording): UpdateDataRecordingByTaskGuidResponse;
    
    /*
    * Deletes a specific DataRecording addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $taskGuid a global unique id of a concrete study-task execution which is usually originated at the primary CRF or study management system ('SMS')
    */
    function DeleteDataRecordingByTaskGuid(string $taskGuid): DeleteDataRecordingByTaskGuidResponse;
    
  }
  
  public interface IVisits {
    
    /*
    * Loads a specific Visit addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
    *
    * @param $visitGuid a global unique id of a concrete study-visit execution which is usually originated at the primary CRF or study management system ('SMS')
    */
    function GetVisitByVisitGuid(string $visitGuid): GetVisitByVisitGuidResponse;
    
    /*
    * Loads Visits.
    *
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of Visits which should be returned
    */
    function GetVisits(int $page, int $pageSize): GetVisitsResponse;
    
    /*
    * Loads Visits where values matching to the given filterExpression
    *
    * @param $filterExpression a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    * @param $sortingExpression one or more property names which are used as sort order (before pagination)
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of Visits which should be returned
    */
    function SearchVisits(string $filterExpression, string $sortingExpression, int $page, int $pageSize): SearchVisitsResponse;
    
    /*
    * Adds a new Visit and returns its primary identifier (or null on failure).
    *
    * @param $visit Visit containing the new values
    */
    function AddNewVisit(Visit $visit): AddNewVisitResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given Visit addressed by the primary identifier fields within the given Visit. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $visit Visit containing the new values (the primary identifier fields within the given Visit will be used to address the target record)
    */
    function UpdateVisit(Visit $visit): UpdateVisitResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given Visit addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $visitGuid a global unique id of a concrete study-visit execution which is usually originated at the primary CRF or study management system ('SMS')
    * @param $visit Visit containing the new values (the primary identifier fields within the given Visit will be ignored)
    */
    function UpdateVisitByVisitGuid(string $visitGuid, Visit $visit): UpdateVisitByVisitGuidResponse;
    
    /*
    * Deletes a specific Visit addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $visitGuid a global unique id of a concrete study-visit execution which is usually originated at the primary CRF or study management system ('SMS')
    */
    function DeleteVisitByVisitGuid(string $visitGuid): DeleteVisitByVisitGuidResponse;
    
  }
  
  public interface IDrugApplyments {
    
    /*
    * Loads a specific DrugApplyment addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
    *
    * @param $taskGuid a global unique id of a concrete study-task execution which is usually originated at the primary CRF or study management system ('SMS')
    */
    function GetDrugApplymentByTaskGuid(string $taskGuid): GetDrugApplymentByTaskGuidResponse;
    
    /*
    * Loads DrugApplyments.
    *
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of DrugApplyments which should be returned
    */
    function GetDrugApplyments(int $page, int $pageSize): GetDrugApplymentsResponse;
    
    /*
    * Loads DrugApplyments where values matching to the given filterExpression
    *
    * @param $filterExpression a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    * @param $sortingExpression one or more property names which are used as sort order (before pagination)
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of DrugApplyments which should be returned
    */
    function SearchDrugApplyments(string $filterExpression, string $sortingExpression, int $page, int $pageSize): SearchDrugApplymentsResponse;
    
    /*
    * Adds a new DrugApplyment and returns its primary identifier (or null on failure).
    *
    * @param $drugApplyment DrugApplyment containing the new values
    */
    function AddNewDrugApplyment(DrugApplyment $drugApplyment): AddNewDrugApplymentResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given DrugApplyment addressed by the primary identifier fields within the given DrugApplyment. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $drugApplyment DrugApplyment containing the new values (the primary identifier fields within the given DrugApplyment will be used to address the target record)
    */
    function UpdateDrugApplyment(DrugApplyment $drugApplyment): UpdateDrugApplymentResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given DrugApplyment addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $taskGuid a global unique id of a concrete study-task execution which is usually originated at the primary CRF or study management system ('SMS')
    * @param $drugApplyment DrugApplyment containing the new values (the primary identifier fields within the given DrugApplyment will be ignored)
    */
    function UpdateDrugApplymentByTaskGuid(string $taskGuid, DrugApplyment $drugApplyment): UpdateDrugApplymentByTaskGuidResponse;
    
    /*
    * Deletes a specific DrugApplyment addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $taskGuid a global unique id of a concrete study-task execution which is usually originated at the primary CRF or study management system ('SMS')
    */
    function DeleteDrugApplymentByTaskGuid(string $taskGuid): DeleteDrugApplymentByTaskGuidResponse;
    
  }
  
  public interface IStudyEvents {
    
    /*
    * Loads a specific StudyEvent addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
    *
    * @param $eventGuid a global unique id of a concrete study-event occurrence which is usually originated at the primary CRF or study management system ('SMS')
    */
    function GetStudyEventByEventGuid(string $eventGuid): GetStudyEventByEventGuidResponse;
    
    /*
    * Loads StudyEvents.
    *
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of StudyEvents which should be returned
    */
    function GetStudyEvents(int $page, int $pageSize): GetStudyEventsResponse;
    
    /*
    * Loads StudyEvents where values matching to the given filterExpression
    *
    * @param $filterExpression a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    * @param $sortingExpression one or more property names which are used as sort order (before pagination)
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of StudyEvents which should be returned
    */
    function SearchStudyEvents(string $filterExpression, string $sortingExpression, int $page, int $pageSize): SearchStudyEventsResponse;
    
    /*
    * Adds a new StudyEvent and returns its primary identifier (or null on failure).
    *
    * @param $studyEvent StudyEvent containing the new values
    */
    function AddNewStudyEvent(StudyEvent $studyEvent): AddNewStudyEventResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given StudyEvent addressed by the primary identifier fields within the given StudyEvent. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $studyEvent StudyEvent containing the new values (the primary identifier fields within the given StudyEvent will be used to address the target record)
    */
    function UpdateStudyEvent(StudyEvent $studyEvent): UpdateStudyEventResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given StudyEvent addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $eventGuid a global unique id of a concrete study-event occurrence which is usually originated at the primary CRF or study management system ('SMS')
    * @param $studyEvent StudyEvent containing the new values (the primary identifier fields within the given StudyEvent will be ignored)
    */
    function UpdateStudyEventByEventGuid(string $eventGuid, StudyEvent $studyEvent): UpdateStudyEventByEventGuidResponse;
    
    /*
    * Deletes a specific StudyEvent addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $eventGuid a global unique id of a concrete study-event occurrence which is usually originated at the primary CRF or study management system ('SMS')
    */
    function DeleteStudyEventByEventGuid(string $eventGuid): DeleteStudyEventByEventGuidResponse;
    
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
  
  public interface ITreatments {
    
    /*
    * Loads a specific Treatment addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
    *
    * @param $taskGuid a global unique id of a concrete study-task execution which is usually originated at the primary CRF or study management system ('SMS')
    */
    function GetTreatmentByTaskGuid(string $taskGuid): GetTreatmentByTaskGuidResponse;
    
    /*
    * Loads Treatments.
    *
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of Treatments which should be returned
    */
    function GetTreatments(int $page, int $pageSize): GetTreatmentsResponse;
    
    /*
    * Loads Treatments where values matching to the given filterExpression
    *
    * @param $filterExpression a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    * @param $sortingExpression one or more property names which are used as sort order (before pagination)
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of Treatments which should be returned
    */
    function SearchTreatments(string $filterExpression, string $sortingExpression, int $page, int $pageSize): SearchTreatmentsResponse;
    
    /*
    * Adds a new Treatment and returns its primary identifier (or null on failure).
    *
    * @param $treatment Treatment containing the new values
    */
    function AddNewTreatment(Treatment $treatment): AddNewTreatmentResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given Treatment addressed by the primary identifier fields within the given Treatment. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $treatment Treatment containing the new values (the primary identifier fields within the given Treatment will be used to address the target record)
    */
    function UpdateTreatment(Treatment $treatment): UpdateTreatmentResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given Treatment addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $taskGuid a global unique id of a concrete study-task execution which is usually originated at the primary CRF or study management system ('SMS')
    * @param $treatment Treatment containing the new values (the primary identifier fields within the given Treatment will be ignored)
    */
    function UpdateTreatmentByTaskGuid(string $taskGuid, Treatment $treatment): UpdateTreatmentByTaskGuidResponse;
    
    /*
    * Deletes a specific Treatment addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $taskGuid a global unique id of a concrete study-task execution which is usually originated at the primary CRF or study management system ('SMS')
    */
    function DeleteTreatmentByTaskGuid(string $taskGuid): DeleteTreatmentByTaskGuidResponse;
    
  }
  
}
