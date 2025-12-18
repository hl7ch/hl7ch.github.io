# CH PDQm $Match - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH PDQm $Match**

## OperationDefinition: CH PDQm $Match 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/OperationDefinition/CHPDQmMatch | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:Find_Patient_Matches_PDQm |
| **Copyright/Legal**: CC0-1.0 | |

 
This operation implements the[Patient Demographics Match [ITI-119]](iti-119.md)transaction. It is fully compatible with the[$match Operation on Patient](http://hl7.org/fhir/R4/patient-operation-match.html). The only changes are to constrain the input parameters to use the[PDQm Patient Profile for $match Input](StructureDefinition-CHPDQmMatchInput.md)profile and to constrain the output parameters to use the[PDQm Patient Profile](StructureDefinition-ch-pdqm-patient.md)profile. 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "CHPDQmMatch",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/OperationDefinition/CHPDQmMatch",
  "version" : "5.0.0",
  "name" : "Find_Patient_Matches_PDQm",
  "title" : "CH PDQm $Match",
  "status" : "active",
  "kind" : "operation",
  "date" : "2025-12-18T15:54:33+00:00",
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
  "description" : "This operation implements the [Patient Demographics Match \\[ITI-119\\]](iti-119.html) transaction.\nIt is fully compatible with the [$match Operation on Patient](http://hl7.org/fhir/R4/patient-operation-match.html).\nThe only changes are to constrain the input parameters to use the [PDQm Patient Profile for $match Input](StructureDefinition-CHPDQmMatchInput.html) profile\nand to constrain the output parameters to use the [PDQm Patient Profile](StructureDefinition-ch-pdqm-patient.html) profile.",
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
  "affectsState" : false,
  "code" : "match",
  "base" : "http://hl7.org/fhir/OperationDefinition/Patient-match",
  "resource" : ["Patient"],
  "system" : false,
  "type" : true,
  "instance" : false,
  "parameter" : [
    {
      "name" : "resource",
      "use" : "in",
      "min" : 1,
      "max" : "1",
      "documentation" : "Use this to provide an entire set of patient details for the MPI to match against (e.g. POST a patient record to Patient/$match).",
      "type" : "Patient",
      "targetProfile" : [
        "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-pdqm-patient"
      ]
    },
    {
      "name" : "onlyCertainMatches",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "documentation" : "If there are multiple potential matches, then the match SHOULD not return the results with this flag set to true. When false, the server MAY return multiple results with each result graded accordingly.",
      "type" : "boolean"
    },
    {
      "name" : "count",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "documentation" : "The maximum number of records to return. If no value is provided, the server decides how many matches to return. Note that clients SHOULD be careful when using this, as it MAY prevent probable - and valid - matches from being returned.",
      "type" : "integer"
    },
    {
      "name" : "return",
      "use" : "out",
      "min" : 1,
      "max" : "1",
      "documentation" : "A bundle contain a set of Patient records that represent possible matches, optionally it MAY also contain an OperationOutcome with further information about the search results (such as warnings or information messages, such as a count of records that were close but eliminated) If the operation was unsuccessful, then an OperationOutcome MAY be returned along with a BadRequest status Code (e.g. security issue, or insufficient properties in patient fragment - check against profile). Note: as this is the only out parameter, it is a resource, and it has the name 'return', the result of this operation is returned directly as a resource",
      "type" : "Bundle",
      "targetProfile" : [
        "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-pdqm-matchparametersout"
      ]
    }
  ]
}

```
