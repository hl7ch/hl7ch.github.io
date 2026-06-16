# Referral Orthopedic Surgery - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Referral Orthopedic Surgery**

## Example ServiceRequest: Referral Orthopedic Surgery

Profile: [CH UMZH Connect ServiceRequest](StructureDefinition-ch-umzh-connect-servicerequest.md)

**identifier**: Placer Identifier/REF-2025-001

**status**: Active

**intent**: Order

**category**: Referral to orthopedic service (procedure)

**subject**: [Petra Meier Female, DoB: 1992-03-26 ( Medical record number)](Patient-PetraMeier.md)

**authoredOn**: 2025-12-15

**requester**: [PractitionerRole](PractitionerRole-HansMusterRole.md)

**reasonReference**: [Condition ](Condition-SuspectedACLRupture.md)

**insurance**: [Coverage: identifier = Insurance Card Number; status = active](Coverage-CoverageMeier.md)

**supportingInfo**: 

* [Condition Chronic systolic (congestive) heart failure](Condition-HeartFailureHFrEF.md)
* [MedicationStatement: status = active; medication[x] = ->Medication Entresto (Filmtabl 200 mg) Blist](MedicationStatement-MedicationEntresto.md)
* [MedicationStatement: status = active; medication[x] = ->Medication Concor (Filmtabl 10 mg) Blist](MedicationStatement-MedicationConcor.md)
* [DocumentReference: status = current; date = 2025-12-19 16:12:05+0100; description = Sprechstundenbericht Kardiologie vom 19.12.2025](DocumentReference-DocCardiologyAttachment.md)

**note**: 

> 

Suspected rupture of the left ACL.




## Resource Content

```json
{
  "resourceType" : "ServiceRequest",
  "id" : "ReferralOrthopedicSurgery",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-umzh-connect/StructureDefinition/ch-umzh-connect-servicerequest"]
  },
  "identifier" : [{
    "type" : {
      "coding" : [{
        "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
        "code" : "PLAC"
      }]
    },
    "value" : "REF-2025-001"
  }],
  "status" : "active",
  "intent" : "order",
  "category" : [{
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "183545006",
      "display" : "Referral to orthopedic service (procedure)"
    }]
  }],
  "subject" : {
    "reference" : "Patient/PetraMeier"
  },
  "authoredOn" : "2025-12-15",
  "requester" : {
    "reference" : "PractitionerRole/HansMusterRole"
  },
  "reasonReference" : [{
    "reference" : "Condition/SuspectedACLRupture"
  }],
  "insurance" : [{
    "reference" : "Coverage/CoverageMeier"
  }],
  "supportingInfo" : [{
    "reference" : "Condition/HeartFailureHFrEF"
  },
  {
    "reference" : "MedicationStatement/MedicationEntresto"
  },
  {
    "reference" : "MedicationStatement/MedicationConcor"
  },
  {
    "reference" : "DocumentReference/DocCardiologyAttachment"
  }],
  "note" : [{
    "text" : "Suspected rupture of the left ACL."
  }]
}

```
