# MHD OperationOutcome DocumentReference update error patient id reconciliation - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MHD OperationOutcome DocumentReference update error patient id reconciliation**

## Example OperationOutcome: MHD OperationOutcome DocumentReference update error patient id reconciliation

### Issues

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Severity** | **Code** | **Details** |
| * | Error | Processing Failure | XDSPatientIDReconciliationError |



## Resource Content

```json
{
  "resourceType" : "OperationOutcome",
  "id" : "MhdOperationOutcomeErrorXDSPatientIDReconciliationError",
  "issue" : [
    {
      "severity" : "error",
      "code" : "processing",
      "details" : {
        "text" : "XDSPatientIDReconciliationError"
      }
    }
  ]
}

```
