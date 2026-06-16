# Smoking Status Questionnaire - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Smoking Status Questionnaire**

## Questionnaire: Smoking Status Questionnaire 

| | |
| :--- | :--- |
| *Official URL*:http://fulfiller.example.org/ch-umzh-connect/QuestionnaireSmokingStatus | *Version*:1.0.0-ballot |
| Active as of 2026-06-16 | *Computable Name*: |
| **Copyright/Legal**: CC0-1.0 | |

 
Please provide the patient's current smoking status. 



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "QuestionnaireSmokingStatus",
  "url" : "http://fulfiller.example.org/ch-umzh-connect/QuestionnaireSmokingStatus",
  "version" : "1.0.0-ballot",
  "title" : "Smoking Status Inquiry",
  "status" : "active",
  "subjectType" : ["Patient"],
  "date" : "2026-06-16T06:42:23+00:00",
  "publisher" : "UMZH Connect Team",
  "contact" : [{
    "name" : "UMZH Connect",
    "telecom" : [{
      "system" : "url",
      "value" : "https://umzhconnect.ch/"
    }]
  }],
  "description" : "Please provide the patient's current smoking status.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CHE"
    }]
  }],
  "copyright" : "CC0-1.0",
  "item" : [{
    "linkId" : "smoking-status",
    "text" : "What is the patient's smoking status?",
    "type" : "choice",
    "required" : true,
    "answerOption" : [{
      "valueCoding" : {
        "system" : "http://snomed.info/sct",
        "code" : "266919005",
        "display" : "Never smoked tobacco"
      }
    },
    {
      "valueCoding" : {
        "system" : "http://snomed.info/sct",
        "code" : "8517006",
        "display" : "Ex-smoker"
      }
    },
    {
      "valueCoding" : {
        "system" : "http://snomed.info/sct",
        "code" : "77176002",
        "display" : "Smoker"
      }
    }]
  },
  {
    "linkId" : "pack-years",
    "text" : "What is the patient's pack years?",
    "type" : "decimal",
    "required" : false
  }]
}

```
