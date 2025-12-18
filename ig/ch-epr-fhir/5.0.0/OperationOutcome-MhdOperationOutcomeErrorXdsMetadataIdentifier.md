# MHD OperationOutcome DocumentReference update error identifiers - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MHD OperationOutcome DocumentReference update error identifiers**

## Example OperationOutcome: MHD OperationOutcome DocumentReference update error identifiers

### Issues

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Severity** | **Code** | **Details** |
| * | Error | Processing Failure | XDSMetadataIdentifierError |



## Resource Content

```json
{
  "resourceType" : "OperationOutcome",
  "id" : "MhdOperationOutcomeErrorXdsMetadataIdentifier",
  "issue" : [
    {
      "severity" : "error",
      "code" : "processing",
      "details" : {
        "text" : "XDSMetadataIdentifierError"
      }
    }
  ]
}

```
