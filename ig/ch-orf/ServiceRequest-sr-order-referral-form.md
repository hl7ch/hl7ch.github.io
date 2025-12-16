# ServiceRequest Order-Referral-Form - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ServiceRequest Order-Referral-Form**

## Example ServiceRequest: ServiceRequest Order-Referral-Form

Profile: [CH ORF ServiceRequest](StructureDefinition-ch-orf-servicerequest.md)

**CH ORF Requested Encounter Details**: [Encounter: extension = halbprivat (BFS Medizinische Statistik - 21 1.3.V02 - Klasse / Classe / Classe#2); status = planned; class = emergency (ActCode#EMER)](Encounter-EncounterMusterfrau.md)

**identifier**: Placer Identifier/123, Filler Identifier/456

**status**: Active

**intent**: Order

**priority**: Routine

**subject**: [Erika Musterfrau (official) Female, DoB: 1970-03-14 ( Medical record number)](Patient-ErikaMusterfrau.md)

**requester**: [PractitionerRole](PractitionerRole-SabineMeierPraxisSeeblick.md)

**insurance**: [Coverage: identifier = Insurance Card Number; status = active; type = Krankenversicherung (obligat.)](Coverage-CoverageMusterfrau.md)

**note**: 

> 

Bemerkung/Kommentar




## Resource Content

```json
{
  "resourceType" : "ServiceRequest",
  "id" : "sr-order-referral-form",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-servicerequest"
    ]
  },
  "extension" : [
    {
      "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-requestedencounterdetails",
      "valueReference" : {
        "reference" : "Encounter/EncounterMusterfrau"
      }
    }
  ],
  "identifier" : [
    {
      "type" : {
        "coding" : [
          {
            "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
            "code" : "PLAC"
          }
        ]
      },
      "system" : "urn:oid:2.999.1",
      "value" : "123"
    },
    {
      "type" : {
        "coding" : [
          {
            "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
            "code" : "FILL"
          }
        ]
      },
      "system" : "http://example.com/identifier",
      "value" : "456"
    }
  ],
  "status" : "active",
  "intent" : "order",
  "priority" : "routine",
  "subject" : {
    "reference" : "Patient/ErikaMusterfrau"
  },
  "requester" : {
    "reference" : "PractitionerRole/SabineMeierPraxisSeeblick"
  },
  "insurance" : [
    {
      "reference" : "Coverage/CoverageMusterfrau"
    }
  ],
  "note" : [
    {
      "text" : "Bemerkung/Kommentar"
    }
  ]
}

```
