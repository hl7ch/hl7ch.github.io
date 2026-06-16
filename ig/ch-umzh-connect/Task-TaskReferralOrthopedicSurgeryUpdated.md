# Task for Referral Orthopedic Surgery (Updated with Questionnaire) - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Task for Referral Orthopedic Surgery (Updated with Questionnaire)**

## Example Task: Task for Referral Orthopedic Surgery (Updated with Questionnaire)

Profile: [CH UMZH Connect Coordination Task](StructureDefinition-ch-umzh-connect-coordinationtask.md)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.2.0/NamingSystem-uri.html)/urn:uuid:a8b9cb16-dea5-4e5e-bda1-33f0c5858097

**basedOn**: [http://placer.example.org/fhir/ServiceRequest/ReferralOrthopedicSurgery](http://placer.example.org/fhir/ServiceRequest/ReferralOrthopedicSurgery)

**status**: In Progress

**businessStatus**: The fulfiller needs more information in order to proceed with the fulfillment of the request

**intent**: order

**priority**: Routine

**code**: Fulfill the focal request

**focus**: [http://placer.example.org/fhir/ServiceRequest/ReferralOrthopedicSurgery](http://placer.example.org/fhir/ServiceRequest/ReferralOrthopedicSurgery)

**for**: [http://placer.example.org/fhir/Patient/PetraMeier](http://placer.example.org/fhir/Patient/PetraMeier)

**authoredOn**: 2025-12-15

**lastModified**: 2025-12-16

**requester**: [http://registry.example.org/fhir/Organization/Placer](http://registry.example.org/fhir/Organization/Placer)

**owner**: [http://registry.example.org/fhir/Organization/Placer](http://registry.example.org/fhir/Organization/Placer)

### Outputs

| | | |
| :--- | :--- | :--- |
| - | **Type** | **Value[x]** |
| * | Health assessment questionnaire | [Smoking Status Inquiry](Questionnaire-QuestionnaireSmokingStatus.md) |



## Resource Content

```json
{
  "resourceType" : "Task",
  "id" : "TaskReferralOrthopedicSurgeryUpdated",
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
  "status" : "in-progress",
  "businessStatus" : {
    "coding" : [{
      "system" : "http://hl7.org/fhir/uv/cow/CodeSystem/temp",
      "code" : "awaiting-information"
    }]
  },
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
  "lastModified" : "2025-12-16",
  "requester" : {
    "reference" : "http://registry.example.org/fhir/Organization/Placer"
  },
  "owner" : {
    "reference" : "http://registry.example.org/fhir/Organization/Placer"
  },
  "output" : [{
    "type" : {
      "coding" : [{
        "system" : "http://snomed.info/sct",
        "code" : "273510007",
        "display" : "Health assessment questionnaire"
      }]
    },
    "valueCanonical" : "http://fulfiller.example.org/ch-umzh-connect/QuestionnaireSmokingStatus"
  }]
}

```
