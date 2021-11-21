<?php
/* based on ORSCF VisitData Contract v1.6.0.10914 */

use \MedicalResearch\VisitData\Model;

namespace MedicalResearch\VisitData\StoreAccess {
  
  public class DataRecording {
    
    /*
    * a global unique id of a concrete study-task execution which is usually originated at the primary CRF or study management system ('SMS')
    */
    public $taskGuid;
    
    /*
    * the guid of the visit in which this task was executed
    */
    public $visitGuid;
    
    /*
    * unique invariant name of ths task-procedure as defined in the 'StudyWorkflowDefinition' (originated from the sponsor)
    */
    public $dataRecordingName;
    
    /*
    * title of the task execution as defined in the 'StudyWorkflowDefinition' (originated from the sponsor)
    */
    public $taskExecutionTitle;
    
    /*
    * the estimated date when the visit is scheduled *this field is optional
    */
    public $scheduledDateTimeUtc;
    
    /*
    * the real time, when the data was recorded *this field is optional
    */
    public $executionDateTimeUtc;
    
    /*
    * 0=Unscheduled / 1=Sheduled / 2=Executed / 3=AbortDuringExecution / 4=Skipped / 5=Removed
    */
    public $executionState;
    
    /*
    * schema-url of the data which were stored inside of the 'RecordedData' field
    */
    public $dataSchemaUrl;
    
    /*
    * RAW data, in the schema as defined at the 'DataSchemaUrl'
    */
    public $recordedData;
    
    /*
    * additional notes regarding this dedcated execution (supplied by the execution person) *this field is optional (use null as value)
    */
    public $notesRegardingOutcome;
    
    /*
    * optional structure (in JSON-format) containing additional metadata regarding this record, which can be used by 'StudyExecutionSystems' to extend the schema
    */
    public $extendedMetaData;
    
    /*
    * *this field is optional (use null as value)
    */
    public $executingPerson;
    
  }
  
  public class DrugApplyment {
    
    /*
    * a global unique id of a concrete study-task execution which is usually originated at the primary CRF or study management system ('SMS')
    */
    public $taskGuid;
    
    /*
    * the guid of the visit in which this task was executed
    */
    public $visitGuid;
    
    /*
    * unique invariant name of the study itself as defined in the 'StudyWorkflowDefinition' (originated from the sponsor)
    */
    public $drugApplymentName;
    
    /*
    * title of the task execution as defined in the 'StudyWorkflowDefinition' (originated from the sponsor)
    */
    public $taskExecutionTitle;
    
    /*
    * the estimated time when the drug applyment is scheduled *this field is optional
    */
    public $scheduledDateTimeUtc;
    
    /*
    * the real date, when the visits was executed *this field is optional
    */
    public $executionDateTimeUtc;
    
    /*
    * 0=Unscheduled / 1=Sheduled / 2=Executed / 3=AbortDuringExecution / 4=Skipped / 5=Removed
    */
    public $executionState;
    
    /*
    * name of the drug
    */
    public $drugName;
    
    /*
    * dose (mg) which is inside of one unit
    */
    public $drugDoseMgPerUnitMg;
    
    /*
    * amount of applied units
    */
    public $appliedUnits;
    
    /*
    * additional notes regarding this dedcated execution (supplied by the execution person) *this field is optional (use null as value)
    */
    public $notesRegardingOutcome;
    
    /*
    * optional structure (in JSON-format) containing additional metadata regarding this record, which can be used by 'StudyExecutionSystems' to extend the schema
    */
    public $extendedMetaData;
    
    /*
    * *this field is optional (use null as value)
    */
    public $executingPerson;
    
  }
  
  public class StudyEvent {
    
    /*
    * a global unique id of a concrete study-event occurrence which is usually originated at the primary CRF or study management system ('SMS')
    */
    public $eventGuid;
    
    /*
    * identity of the patient which can be a randomization or screening number (the exact semantic is defined per study)
    */
    public $participantIdentifier;
    
    /*
    * a global unique id of a concrete study execution (dedicated to a concrete institute) which is usually originated at the primary CRF or study management system ('SMS')
    */
    public $studyExecutionIdentifier;
    
    /*
    * unique invariant name of the event as defined in the 'StudyWorkflowDefinition' (originated from the sponsor)
    */
    public $studyEventName;
    
    /*
    * optional structure (in JSON-format) containing additional metadata regarding this record, which can be used by 'StudyExecutionSystems' to extend the schema *this field is optional (use null as value)
    */
    public $extendedMetaData;
    
    public $occourrenceDateTimeUtc;
    
    public $causeInfo;
    
    /*
    * additional notes (supplied by the execution person) *this field is optional (use null as value)
    */
    public $additionalNotes;
    
  }
  
  public class StudyExecutionScope {
    
    /*
    * a global unique id of a concrete study execution (dedicated to a concrete institute) which is usually originated at the primary CRF or study management system ('SMS')
    */
    public $studyExecutionIdentifier;
    
    /*
    * the institute which is executing the study (this should be an invariant technical representation of the company name or a guid)
    */
    public $executingInstituteIdentifier;
    
    /*
    * the official invariant name of the study as given by the sponsor *this field has a max length of 100
    */
    public $studyWorkflowName;
    
    /*
    * version of the workflow *this field has a max length of 20
    */
    public $studyWorkflowVersion;
    
    /*
    * optional structure (in JSON-format) containing additional metadata regarding this record, which can be used by 'StudyExecutionSystems' to extend the schema *this field is optional (use null as value)
    */
    public $extendedMetaData;
    
  }
  
  public class Treatment {
    
    /*
    * a global unique id of a concrete study-task execution which is usually originated at the primary CRF or study management system ('SMS')
    */
    public $taskGuid;
    
    /*
    * the guid of the visit in which this task was executed
    */
    public $visitGuid;
    
    /*
    * unique invariant name of ths task-procedure as defined in the 'StudyWorkflowDefinition' (originated from the sponsor)
    */
    public $treatmentName;
    
    /*
    * title of the task execution as defined in the 'StudyWorkflowDefinition' (originated from the sponsor)
    */
    public $taskExecutionTitle;
    
    /*
    * the estimated time when the treatment is scheduled *this field is optional
    */
    public $scheduledDateTimeUtc;
    
    /*
    * the real time, when the treatment was executed *this field is optional
    */
    public $executionDateTimeUtc;
    
    /*
    * 0=Unscheduled / 1=Sheduled / 2=Executed / 3=AbortDuringExecution / 4=Skipped / 5=Removed
    */
    public $executionState;
    
    /*
    * additional notes regarding this dedcated execution (supplied by the execution person) *this field is optional (use null as value)
    */
    public $notesRegardingOutcome;
    
    /*
    * optional structure of additional metadata regarding this record in JSON-format, which can be used by study execution systems to extend the schema
    */
    public $extendedMetaData;
    
    /*
    * *this field is optional (use null as value)
    */
    public $executingPerson;
    
  }
  
  public class Visit {
    
    /*
    * a global unique id of a concrete study-visit execution which is usually originated at the primary CRF or study management system ('SMS')
    */
    public $visitGuid;
    
    /*
    * identity of the patient which can be a randomization or screening number (the exact semantic is defined per study) *this field has a max length of 50
    */
    public $participantIdentifier;
    
    /*
    * a global unique id of a concrete study execution (dedicated to a concrete institute) which is usually originated at the primary CRF or study management system ('SMS')
    */
    public $studyExecutionIdentifier;
    
    /*
    * unique invariant name of the visit-procedure as defined in the 'StudyWorkflowDefinition' (originated from the sponsor)
    */
    public $visitProdecureName;
    
    /*
    * unique title of the visit execution as defined in the 'StudyWorkflowDefinition' (originated from the sponsor)
    */
    public $visitExecutionTitle;
    
    /*
    * the estimated date when the visit is scheduled for execution *this field is optional
    */
    public $scheduledDateUtc;
    
    /*
    * the real date, when the visits was executed *this field is optional
    */
    public $executionDateUtc;
    
    /*
    * 0=Unscheduled / 1=Sheduled / 2=Executed / 3=AbortDuringExecution / 4=Skipped / 5=Removed
    */
    public $executionState;
    
    /*
    * optional structure (in JSON-format) containing additional metadata regarding this record, which can be used by 'StudyExecutionSystems' to extend the schema *this field is optional (use null as value)
    */
    public $extendedMetaData;
    
    /*
    * *this field is optional (use null as value)
    */
    public $executingPerson;
    
  }
  
}
