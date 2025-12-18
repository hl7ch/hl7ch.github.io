# MHD OperationOutcome DocumentReference update error unmodifiable metadata - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MHD OperationOutcome DocumentReference update error unmodifiable metadata**

## Example OperationOutcome: MHD OperationOutcome DocumentReference update error unmodifiable metadata

### Issues

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Severity** | **Code** | **Details** |
| * | Error | Processing Failure | UnmodifiableMetadataError |



## Resource Content

```json
{
  "resourceType" : "OperationOutcome",
  "id" : "MhdOperationOutcomeErrorUnmodifiableMetadataError",
  "issue" : [
    {
      "severity" : "error",
      "code" : "processing",
      "details" : {
        "text" : "UnmodifiableMetadataError"
      }
    }
  ]
}

```
