<?php
/* based on ORSCF VisitData Contract v1.7.0.0 */


public class DataRecording {
  
  /*
  * a global unique id of a concrete study-task execution which is usually originated at the primary CRF or study management system ('SMS')
  */
  public string $taskGuid;
  
  /*
  * the guid of the visit in which this task was executed
  */
  public string $visitGuid;
  
  /*
  * unique invariant name of ths task-procedure as defined in the 'StudyWorkflowDefinition' (originated from the sponsor)
  */
  public string $dataRecordingName;
  
  /*
  * title of the task execution as defined in the 'StudyWorkflowDefinition' (originated from the sponsor)
  */
  public string $taskExecutionTitle;
  
  /*
  * the estimated date when the visit is scheduled *this field is optional
  */
  public ?string $scheduledDateTimeUtc;
  
  /*
  * the real time, when the data was recorded *this field is optional
  */
  public ?string $executionDateTimeUtc;
  
  /*
  * 0=Unscheduled / 1=Sheduled / 2=Executed / 3=AbortDuringExecution / 4=Skipped / 5=Removed
  */
  public int $executionState;
  
  /*
  * schema-url of the data which were stored inside of the 'RecordedData' field
  */
  public string $dataSchemaUrl;
  
  /*
  * RAW data, in the schema as defined at the 'DataSchemaUrl'
  */
  public string $recordedData;
  
  /*
  * additional notes regarding this dedcated execution (supplied by the execution person) *this field is optional (use null as value)
  */
  public string $notesRegardingOutcome;
  
  /*
  * optional structure (in JSON-format) containing additional metadata regarding this record, which can be used by 'StudyExecutionSystems' to extend the schema
  */
  public string $extendedMetaData;
  
  /*
  * *this field is optional (use null as value)
  */
  public string $executingPerson;
  
}

public class DrugApplyment {
  
  /*
  * a global unique id of a concrete study-task execution which is usually originated at the primary CRF or study management system ('SMS')
  */
  public string $taskGuid;
  
  /*
  * the guid of the visit in which this task was executed
  */
  public string $visitGuid;
  
  /*
  * unique invariant name of the study itself as defined in the 'StudyWorkflowDefinition' (originated from the sponsor)
  */
  public string $drugApplymentName;
  
  /*
  * title of the task execution as defined in the 'StudyWorkflowDefinition' (originated from the sponsor)
  */
  public string $taskExecutionTitle;
  
  /*
  * the estimated time when the drug applyment is scheduled *this field is optional
  */
  public ?string $scheduledDateTimeUtc;
  
  /*
  * the real date, when the visits was executed *this field is optional
  */
  public ?string $executionDateTimeUtc;
  
  /*
  * 0=Unscheduled / 1=Sheduled / 2=Executed / 3=AbortDuringExecution / 4=Skipped / 5=Removed
  */
  public int $executionState;
  
  /*
  * name of the drug
  */
  public string $drugName;
  
  /*
  * dose (mg) which is inside of one unit
  */
  public float $drugDoseMgPerUnitMg;
  
  /*
  * amount of applied units
  */
  public float $appliedUnits;
  
  /*
  * additional notes regarding this dedcated execution (supplied by the execution person) *this field is optional (use null as value)
  */
  public string $notesRegardingOutcome;
  
  /*
  * optional structure (in JSON-format) containing additional metadata regarding this record, which can be used by 'StudyExecutionSystems' to extend the schema
  */
  public string $extendedMetaData;
  
  /*
  * *this field is optional (use null as value)
  */
  public string $executingPerson;
  
}

public class StudyEvent {
  
  /*
  * a global unique id of a concrete study-event occurrence which is usually originated at the primary CRF or study management system ('SMS')
  */
  public string $eventGuid;
  
  /*
  * identity of the patient which can be a randomization or screening number (the exact semantic is defined per study)
  */
  public string $participantIdentifier;
  
  /*
  * a global unique id of a concrete study execution (dedicated to a concrete institute) which is usually originated at the primary CRF or study management system ('SMS')
  */
  public string $studyExecutionIdentifier;
  
  /*
  * unique invariant name of the event as defined in the 'StudyWorkflowDefinition' (originated from the sponsor)
  */
  public string $studyEventName;
  
  /*
  * optional structure (in JSON-format) containing additional metadata regarding this record, which can be used by 'StudyExecutionSystems' to extend the schema *this field is optional (use null as value)
  */
  public string $extendedMetaData;
  
  public string $occourrenceDateTimeUtc;
  
  public string $causeInfo;
  
  /*
  * additional notes (supplied by the execution person) *this field is optional (use null as value)
  */
  public string $additionalNotes;
  
}

public class StudyExecutionScope {
  
  /*
  * a global unique id of a concrete study execution (dedicated to a concrete institute) which is usually originated at the primary CRF or study management system ('SMS')
  */
  public string $studyExecutionIdentifier;
  
  /*
  * the institute which is executing the study (this should be an invariant technical representation of the company name or a guid)
  */
  public string $executingInstituteIdentifier;
  
  /*
  * the official invariant name of the study as given by the sponsor *this field has a max length of 100
  */
  public string $studyWorkflowName;
  
  /*
  * version of the workflow *this field has a max length of 20
  */
  public string $studyWorkflowVersion;
  
  /*
  * optional structure (in JSON-format) containing additional metadata regarding this record, which can be used by 'StudyExecutionSystems' to extend the schema *this field is optional (use null as value)
  */
  public string $extendedMetaData;
  
}

public class Treatment {
  
  /*
  * a global unique id of a concrete study-task execution which is usually originated at the primary CRF or study management system ('SMS')
  */
  public string $taskGuid;
  
  /*
  * the guid of the visit in which this task was executed
  */
  public string $visitGuid;
  
  /*
  * unique invariant name of ths task-procedure as defined in the 'StudyWorkflowDefinition' (originated from the sponsor)
  */
  public string $treatmentName;
  
  /*
  * title of the task execution as defined in the 'StudyWorkflowDefinition' (originated from the sponsor)
  */
  public string $taskExecutionTitle;
  
  /*
  * the estimated time when the treatment is scheduled *this field is optional
  */
  public ?string $scheduledDateTimeUtc;
  
  /*
  * the real time, when the treatment was executed *this field is optional
  */
  public ?string $executionDateTimeUtc;
  
  /*
  * 0=Unscheduled / 1=Sheduled / 2=Executed / 3=AbortDuringExecution / 4=Skipped / 5=Removed
  */
  public int $executionState;
  
  /*
  * additional notes regarding this dedcated execution (supplied by the execution person) *this field is optional (use null as value)
  */
  public string $notesRegardingOutcome;
  
  /*
  * optional structure of additional metadata regarding this record in JSON-format, which can be used by study execution systems to extend the schema
  */
  public string $extendedMetaData;
  
  /*
  * *this field is optional (use null as value)
  */
  public string $executingPerson;
  
}

public class Visit {
  
  /*
  * a global unique id of a concrete study-visit execution which is usually originated at the primary CRF or study management system ('SMS')
  */
  public string $visitGuid;
  
  /*
  * identity of the patient which can be a randomization or screening number (the exact semantic is defined per study) *this field has a max length of 50
  */
  public string $participantIdentifier;
  
  /*
  * a global unique id of a concrete study execution (dedicated to a concrete institute) which is usually originated at the primary CRF or study management system ('SMS')
  */
  public string $studyExecutionIdentifier;
  
  /*
  * unique invariant name of the visit-procedure as defined in the 'StudyWorkflowDefinition' (originated from the sponsor)
  */
  public string $visitProdecureName;
  
  /*
  * unique title of the visit execution as defined in the 'StudyWorkflowDefinition' (originated from the sponsor)
  */
  public string $visitExecutionTitle;
  
  /*
  * the estimated date when the visit is scheduled for execution *this field is optional
  */
  public ?string $scheduledDateUtc;
  
  /*
  * the real date, when the visits was executed *this field is optional
  */
  public ?string $executionDateUtc;
  
  /*
  * 0=Unscheduled / 1=Sheduled / 2=Executed / 3=AbortDuringExecution / 4=Skipped / 5=Removed
  */
  public int $executionState;
  
  /*
  * optional structure (in JSON-format) containing additional metadata regarding this record, which can be used by 'StudyExecutionSystems' to extend the schema *this field is optional (use null as value)
  */
  public string $extendedMetaData;
  
  /*
  * *this field is optional (use null as value)
  */
  public string $executingPerson;
  
}
