# ServiceRequest Medical Referral - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ServiceRequest Medical Referral**

## Example ServiceRequest: ServiceRequest Medical Referral

Profile: [CH eTOC Service Request](StructureDefinition-ch-etoc-servicerequest.md)

**CH ORF Location and Time**: [Appointment: status = proposed; patientInstruction = Wunschtermin der Patientin; requestedPeriod = 2019-04-01 15:00:00+0000 --> 2019-04-01 15:30:00+0000](Appointment-AppointmentHospitalStay.md)

**identifier**: Placer Identifier/12345

**status**: Active

**intent**: Order

**priority**: Routine

**code**: Abklärung akuter Thoraxschmerzen

**subject**: [Susanna Ufferer (official) Female, DoB: 1970-03-14](Patient-SUfferer.md)

**requester**: [PractitionerRole](PractitionerRole-ORderplacerHappyDoctors.md)

**reasonCode**: Verdacht auf Vorderwandinfarkt

**reasonReference**: [Condition](Condition-PrimaryDiagnosis.md)

**insurance**: [Coverage: identifier = Insurance Card Number; status = active; type = Krankenversicherung (obligat.)](Coverage-CoverageKVG.md)

**supportingInfo**: 

* [Observation Body height](Observation-BodyHeight.md)
* [Observation Body weight](Observation-BodyWeight.md)
* [Condition](Condition-SecondaryDiagnosis1.md)
* [Condition](Condition-SecondaryDiagnosis2.md)
* [DocumentReference: status = current; description = Befund Thorax-Rx vom 1.2.23; Example of Attachment Attachment](DocumentReference-DocumentReferenceAttachment.md)

**note**: 

> 

Patient ist sehr ängstlich




## Resource Content

```json
{
  "resourceType" : "ServiceRequest",
  "id" : "ServiceRequestEtoc",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-servicerequest"
    ]
  },
  "extension" : [
    {
      "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-locationandtime",
      "valueReference" : {
        "reference" : "Appointment/AppointmentHospitalStay"
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
      "system" : "urn:oid:1.3.4.5.6.7",
      "value" : "12345"
    }
  ],
  "status" : "active",
  "intent" : "order",
  "priority" : "routine",
  "code" : {
    "text" : "Abklärung akuter Thoraxschmerzen"
  },
  "subject" : {
    "reference" : "Patient/SUfferer"
  },
  "requester" : {
    "reference" : "PractitionerRole/ORderplacerHappyDoctors"
  },
  "reasonCode" : [
    {
      "text" : "Verdacht auf Vorderwandinfarkt"
    }
  ],
  "reasonReference" : [
    {
      "reference" : "Condition/PrimaryDiagnosis"
    }
  ],
  "insurance" : [
    {
      "reference" : "Coverage/CoverageKVG"
    }
  ],
  "supportingInfo" : [
    {
      "reference" : "Observation/BodyHeight"
    },
    {
      "reference" : "Observation/BodyWeight"
    },
    {
      "reference" : "Condition/SecondaryDiagnosis1"
    },
    {
      "reference" : "Condition/SecondaryDiagnosis2"
    },
    {
      "reference" : "DocumentReference/DocumentReferenceAttachment"
    }
  ],
  "note" : [
    {
      "text" : "Patient ist sehr ängstlich"
    }
  ]
}

```
