# PDQm OperationOutcome More Attributes Requested Example - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PDQm OperationOutcome More Attributes Requested Example**

## Example OperationOutcome: PDQm OperationOutcome More Attributes Requested Example

Profile: [CH PDQm OperationOutcome More Attributes Requested](StructureDefinition-ch-pdqm-moreattributesrequested.md)

> **issue****severity**: Warning**code**: Incomplete Results**details**:LivingSubjectAdministrativeGenderRequested

> **issue****severity**: Warning**code**: Incomplete Results**details**:LivingSubjectBirthPlaceNameRequested

> **issue****severity**: Warning**code**: Incomplete Results**details**:BirthNameRequested



## Resource Content

```json
{
  "resourceType" : "OperationOutcome",
  "id" : "PDQmResponseMoreAttributesRequested",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-pdqm-moreattributesrequested"
    ]
  },
  "issue" : [
    {
      "severity" : "warning",
      "code" : "incomplete",
      "details" : {
        "coding" : [
          {
            "system" : "urn:oid:1.3.6.1.4.1.19376.1.2.27.1",
            "code" : "LivingSubjectAdministrativeGenderRequested",
            "display" : "LivingSubjectAdministrativeGenderRequested"
          }
        ]
      }
    },
    {
      "severity" : "warning",
      "code" : "incomplete",
      "details" : {
        "coding" : [
          {
            "system" : "urn:oid:1.3.6.1.4.1.19376.1.2.27.1",
            "code" : "LivingSubjectBirthPlaceNameRequested",
            "display" : "LivingSubjectBirthPlaceNameRequested"
          }
        ]
      }
    },
    {
      "severity" : "warning",
      "code" : "incomplete",
      "details" : {
        "coding" : [
          {
            "system" : "urn:oid:2.16.756.5.30.1.127.3.10.17",
            "code" : "BirthNameRequested",
            "display" : "BirthNameRequested"
          }
        ]
      }
    }
  ]
}

```
