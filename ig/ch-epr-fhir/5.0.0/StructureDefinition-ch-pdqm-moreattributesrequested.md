# CH PDQm OperationOutcome More Attributes Requested - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH PDQm OperationOutcome More Attributes Requested**

## Resource Profile: CH PDQm OperationOutcome More Attributes Requested 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-pdqm-moreattributesrequested | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:ChPdqmResponseMoreAttributesRequested |
| **Copyright/Legal**: CC0-1.0 | |

 
A profile on the OperationOutcome for indicating which additional attributes are requested to lower the results number. 

**Usages:**

* Examples for this Profile: [OperationOutcome/PDQmResponseMoreAttributesRequested](OperationOutcome-PDQmResponseMoreAttributesRequested.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/ch-pdqm-moreattributesrequested)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-pdqm-moreattributesrequested.csv), [Excel](StructureDefinition-ch-pdqm-moreattributesrequested.xlsx), [Schematron](StructureDefinition-ch-pdqm-moreattributesrequested.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-pdqm-moreattributesrequested",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-pdqm-moreattributesrequested",
  "version" : "5.0.0",
  "name" : "ChPdqmResponseMoreAttributesRequested",
  "title" : "CH PDQm OperationOutcome More Attributes Requested",
  "status" : "active",
  "date" : "2025-12-18T15:42:00+00:00",
  "publisher" : "eHealth Suisse",
  "contact" : [
    {
      "name" : "eHealth Suisse",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.e-health-suisse.ch"
        }
      ]
    },
    {
      "name" : "eHealth Suisse",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.e-health-suisse.ch",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "A profile on the OperationOutcome for indicating which additional attributes are requested to lower the results number.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "OperationOutcome",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/OperationOutcome",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "OperationOutcome",
        "path" : "OperationOutcome"
      },
      {
        "id" : "OperationOutcome.issue.severity",
        "path" : "OperationOutcome.issue.severity",
        "patternCode" : "warning"
      },
      {
        "id" : "OperationOutcome.issue.code",
        "path" : "OperationOutcome.issue.code",
        "patternCode" : "incomplete"
      },
      {
        "id" : "OperationOutcome.issue.details",
        "path" : "OperationOutcome.issue.details",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-epr-fhir/ValueSet/ChPdqmMoreAttributesRequested"
        }
      }
    ]
  }
}

```
