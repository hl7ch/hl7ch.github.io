# Task for Referral Orthopedic Surgery (Completed with Results) - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Task for Referral Orthopedic Surgery (Completed with Results)**

## Example Task: Task for Referral Orthopedic Surgery (Completed with Results)

Profile: [CH UMZH Connect Coordination Task](StructureDefinition-ch-umzh-connect-coordinationtask.md)

**identifier**: [URI](http://terminology.hl7.org/5.0.0/NamingSystem-uri.html)/urn:uuid:a8b9cb16-dea5-4e5e-bda1-33f0c5858097

**basedOn**: [http://placer.example.org/fhir/ServiceRequest/ReferralOrthopedicSurgery](http://placer.example.org/fhir/ServiceRequest/ReferralOrthopedicSurgery)

**status**: Completed

**intent**: order

**priority**: Routine

**code**: Fulfill the focal request

**focus**: [http://placer.example.org/fhir/ServiceRequest/ReferralOrthopedicSurgery](http://placer.example.org/fhir/ServiceRequest/ReferralOrthopedicSurgery)

**for**: [http://placer.example.org/fhir/Patient/PetraMeier](http://placer.example.org/fhir/Patient/PetraMeier)

**authoredOn**: 2025-12-15

**lastModified**: 2026-01-20

**requester**: [http://registry.example.org/fhir/Organization/Placer](http://registry.example.org/fhir/Organization/Placer)

**owner**: [http://registry.example.org/fhir/Organization/Fulfiller](http://registry.example.org/fhir/Organization/Fulfiller)

### Inputs

| | | |
| :--- | :--- | :--- |
| - | **Type** | **Value[x]** |
| * | Health assessment questionnaire | [Response to Questionnaire '->Smoking Status Inquiry' about '->http://placer.example.org/fhir/Patient/PetraMeier'](QuestionnaireResponse-QuestionnaireResponseSmokingStatus.md) |

> **output****type**: Health assessment questionnaire**value**: [Smoking Status Inquiry](Questionnaire-QuestionnaireSmokingStatus.md)

> **output****type**: Consultation**value**: [Appointment: status = fulfilled; description = Pre-operative orthopedic consultation prior to ACL reconstruction surgery; start = 2026-01-08 09:00:00+0100; end = 2026-01-08 09:30:00+0100](Appointment-AppointmentOrthopedicConsultation.md)

> **output****type**: Discharge summary (record artifact)**value**: [DocumentReference: status = current; type = Discharge summary (record artifact); date = 2026-01-20 11:00:00+0100; description = Austrittsbericht nach Knie-Operation vom 20.01.2026](DocumentReference-DocDischargeReportOrthopedics.md)

> **output****type**: Prescription of drug**value**: [MedicationStatement: status = active; medication[x] = ->Medication Acetylsalicylic acid](MedicationStatement-MedicationAspirin.md)



## Resource Content

```json
{
  "resourceType" : "Task",
  "id" : "TaskReferralOrthopedicSurgeryCompleted",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-umzh-connect/StructureDefinition/ch-umzh-connect-coordinationtask"]
  },
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:a8b9cb16-dea5-4e5e-bda1-33f0c5858097"
  }],
  "basedOn" : [{
    "reference" : "http://placer.example.org/fhir/ServiceRequest/ReferralOrthopedicSurgery"
  }],
  "status" : "completed",
  "intent" : "order",
  "priority" : "routine",
  "code" : {
    "coding" : [{
      "system" : "http://hl7.org/fhir/CodeSystem/task-code",
      "code" : "fulfill",
      "display" : "Fulfill the focal request"
    }]
  },
  "focus" : {
    "reference" : "http://placer.example.org/fhir/ServiceRequest/ReferralOrthopedicSurgery"
  },
  "for" : {
    "reference" : "http://placer.example.org/fhir/Patient/PetraMeier"
  },
  "authoredOn" : "2025-12-15",
  "lastModified" : "2026-01-20",
  "requester" : {
    "reference" : "http://registry.example.org/fhir/Organization/Placer"
  },
  "owner" : {
    "reference" : "http://registry.example.org/fhir/Organization/Fulfiller"
  },
  "input" : [{
    "type" : {
      "coding" : [{
        "system" : "http://snomed.info/sct",
        "code" : "273510007",
        "display" : "Health assessment questionnaire"
      }]
    },
    "valueReference" : {
      "reference" : "QuestionnaireResponse/QuestionnaireResponseSmokingStatus"
    }
  }],
  "output" : [{
    "type" : {
      "coding" : [{
        "system" : "http://snomed.info/sct",
        "code" : "273510007",
        "display" : "Health assessment questionnaire"
      }]
    },
    "valueCanonical" : "http://fulfiller.example.org/ch-umzh-connect/QuestionnaireSmokingStatus"
  },
  {
    "type" : {
      "coding" : [{
        "system" : "http://snomed.info/sct",
        "code" : "11429006",
        "display" : "Consultation"
      }]
    },
    "valueReference" : {
      "reference" : "Appointment/AppointmentOrthopedicConsultation"
    }
  },
  {
    "type" : {
      "coding" : [{
        "system" : "http://snomed.info/sct",
        "code" : "373942005",
        "display" : "Discharge summary (record artifact)"
      }]
    },
    "valueReference" : {
      "reference" : "DocumentReference/DocDischargeReportOrthopedics"
    }
  },
  {
    "type" : {
      "coding" : [{
        "system" : "http://snomed.info/sct",
        "code" : "33633005",
        "display" : "Prescription of drug"
      }]
    },
    "valueReference" : {
      "reference" : "MedicationStatement/MedicationAspirin"
    }
  }]
}

```
