# PDQm Match response message - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PDQm Match response message**

## Example Bundle: PDQm Match response message



## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "PDQm-QueryResponse",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-pdqm-matchparametersout"
    ]
  },
  "type" : "searchset",
  "total" : 1,
  "link" : [
    {
      "relation" : "self",
      "url" : "http://example.com/Patient/$match"
    }
  ],
  "entry" : [
    {
      "fullUrl" : "http://example.com/Patient/FranzMuster",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "FranzMuster",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-pdqm-patient"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Patient_FranzMuster\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Patient FranzMuster</b></p><a name=\"FranzMuster\"> </a><a name=\"hcFranzMuster\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-pdqm-patient.html\">CH PDQm Patient</a></p></div><p style=\"border: 1px #661aff solid; background-color: #e6e6ff; padding: 10px;\">Franz Muster  Male, DoB: 1995-01-27 ( urn:oid:2.16.756.5.30.1.127.3.10.3#761337610411353650)</p><hr/><table class=\"grid\"><tr><td style=\"background-color: #f3f5da\" title=\"Other Ids (see the one above)\">Other Ids:</td><td colspan=\"3\"><ul><li>Medical record number/value of MPI-PID</li><li>Medical record number/8734</li></ul></td></tr><tr><td style=\"background-color: #f3f5da\" title=\"Patient Links\">Links:</td><td colspan=\"3\"><ul><li>Managing Organization: Identifier: <a href=\"https://www.gs1.org/standards/id-keys/gln\" title=\"Global Location Number\">GLN</a>/7601000201041</li></ul></td></tr></table></div>"
        },
        "identifier" : [
          {
            "system" : "urn:oid:2.16.756.5.30.1.127.3.10.3",
            "value" : "761337610411353650"
          },
          {
            "type" : {
              "coding" : [
                {
                  "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
                  "code" : "MR"
                }
              ]
            },
            "system" : "urn:oid:2.999.5.6.7",
            "value" : "value of MPI-PID"
          },
          {
            "type" : {
              "coding" : [
                {
                  "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
                  "code" : "MR"
                }
              ]
            },
            "system" : "urn:oid:2.999.1.2.3.4",
            "value" : "8734"
          }
        ],
        "name" : [
          {
            "family" : "Muster",
            "given" : ["Franz"]
          }
        ],
        "gender" : "male",
        "birthDate" : "1995-01-27",
        "managingOrganization" : {
          "identifier" : {
            "system" : "urn:oid:2.51.1.3",
            "value" : "7601000201041"
          }
        }
      },
      "search" : {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/match-grade",
            "valueCode" : "certain"
          }
        ],
        "mode" : "match",
        "score" : 1
      }
    }
  ]
}

```
