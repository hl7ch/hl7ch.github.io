# Task for Referral Orthopedic Surgery (Initial) - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Task for Referral Orthopedic Surgery (Initial)**

## Example Task: Task for Referral Orthopedic Surgery (Initial)

Profile: [CH UMZH Connect Coordination Task](StructureDefinition-ch-umzh-connect-coordinationtask.md)

**identifier**: [URI](http://terminology.hl7.org/5.0.0/NamingSystem-uri.html)/urn:uuid:a8b9cb16-dea5-4e5e-bda1-33f0c5858097

**basedOn**: [http://placer.example.org/fhir/ServiceRequest/ReferralOrthopedicSurgery](http://placer.example.org/fhir/ServiceRequest/ReferralOrthopedicSurgery)

**status**: Requested

**intent**: order

**priority**: Routine

**code**: Fulfill the focal request

**focus**: [http://placer.example.org/fhir/ServiceRequest/ReferralOrthopedicSurgery](http://placer.example.org/fhir/ServiceRequest/ReferralOrthopedicSurgery)

**for**: [http://placer.example.org/fhir/Patient/PetraMeier](http://placer.example.org/fhir/Patient/PetraMeier)

**authoredOn**: 2025-12-15

**requester**: [http://registry.example.org/fhir/Organization/Placer](http://registry.example.org/fhir/Organization/Placer)

**owner**: [http://registry.example.org/fhir/Organization/Fulfiller](http://registry.example.org/fhir/Organization/Fulfiller)



## Resource Content

```json
{
  "resourceType" : "Task",
  "id" : "TaskReferralOrthopedicSurgery",
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
  "status" : "requested",
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
  "requester" : {
    "reference" : "http://registry.example.org/fhir/Organization/Placer"
  },
  "owner" : {
    "reference" : "http://registry.example.org/fhir/Organization/Fulfiller"
  }
}

```
