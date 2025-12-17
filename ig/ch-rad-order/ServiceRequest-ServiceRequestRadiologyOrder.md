# ServiceRequest Radiology Order - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ServiceRequest Radiology Order**

## Example ServiceRequest: ServiceRequest Radiology Order

Profile: [CH RAD-Order ServiceRequest](StructureDefinition-ch-rad-order-servicerequest.md)

**CH ORF Location and Time**: [Appointment: status = proposed; patientInstruction = Wunschtermin der Patientin; requestedPeriod = 2019-04-01 15:00:00+0000 --> 2019-04-01 15:30:00+0000](Appointment-AppointmentRadiography.md)

**identifier**: Placer Identifier/12345

**status**: Active

**intent**: Order

**category**: Bildgebende Diagnostik

**priority**: Routine

**code**: projection radiography

**orderDetail**: Thorax

**subject**: [Susanna Ufferer (official) Female, DoB: 1945-03-14](Patient-PatSUfferer.md)

**requester**: [PractitionerRole](PractitionerRole-RoleORderplacer.md)

**performer**: [PractitionerRole](PractitionerRole-RoleORderfiller.md)

**reasonCode**: Diagnostic Question

**reasonReference**: [Condition](Condition-PrimaryDiagnosis.md)

**insurance**: [Coverage: identifier = Insurance Card Number; status = active; type = Krankenversicherung (obligat.)](Coverage-CoverageKVG.md)

**supportingInfo**: 

* [Observation Body height](Observation-BodyHeight.md)
* [Observation Body weight](Observation-BodyWeight.md)
* [Condition](Condition-SecondaryDiagnosis1.md)
* [Condition](Condition-SecondaryDiagnosis2.md)
* [Condition Blood coagulation disorder (disorder)](Condition-CaveatBloodCoagulation.md)
* [Condition Renal insufficiency (disorder)](Condition-CaveatRenalInsufficiency.md)
* [Condition Body piercing (finding)](Condition-CaveatBodyPiercing.md)
* [Condition Cardiac pacemaker in situ](Condition-CaveatDeviceCardiacPacemaker.md)
* [Condition Metformin (substance)](Condition-CaveatDrugPrescriptionMetformin.md)
* [DocumentReference: status = current; description = Befund Thorax-Rx vom 1.2.23; Eyample of Non-DICOM Attachment](DocumentReference-DocumentReferenceNonDicom.md)

**bodySite**: Chest wall

**note**: 

> 

Bemerkung/Kommentar




## Resource Content

```json
{
  "resourceType" : "ServiceRequest",
  "id" : "ServiceRequestRadiologyOrder",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequest"
    ]
  },
  "extension" : [
    {
      "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-locationandtime",
      "valueReference" : {
        "reference" : "Appointment/AppointmentRadiography"
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
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://fhir.ch/ig/ch-rad-order/CodeSystem/ch-rad-order-requested-service",
          "code" : "ImagingRequest",
          "display" : "Bildgebende Diagnostik"
        }
      ]
    }
  ],
  "priority" : "routine",
  "code" : {
    "coding" : [
      {
        "system" : "http://radlex.org",
        "code" : "RID10345",
        "display" : "projection radiography"
      }
    ]
  },
  "orderDetail" : [
    {
      "extension" : [
        {
          "url" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-order-detail-type",
          "valueCoding" : {
            "system" : "http://fhir.ch/ig/ch-rad-order/CodeSystem/ch-rad-order-order-detail-type",
            "code" : "imagingRegion"
          }
        }
      ],
      "coding" : [
        {
          "system" : "http://radlex.org",
          "code" : "RID1243",
          "display" : "Thorax"
        }
      ]
    }
  ],
  "subject" : {
    "reference" : "Patient/PatSUfferer"
  },
  "requester" : {
    "reference" : "PractitionerRole/RoleORderplacer"
  },
  "performer" : [
    {
      "reference" : "PractitionerRole/RoleORderfiller"
    }
  ],
  "reasonCode" : [
    {
      "text" : "Diagnostic Question"
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
      "reference" : "Condition/CaveatBloodCoagulation"
    },
    {
      "reference" : "Condition/CaveatRenalInsufficiency"
    },
    {
      "reference" : "Condition/CaveatBodyPiercing"
    },
    {
      "reference" : "Condition/CaveatDeviceCardiacPacemaker"
    },
    {
      "reference" : "Condition/CaveatDrugPrescriptionMetformin"
    },
    {
      "reference" : "DocumentReference/DocumentReferenceNonDicom"
    }
  ],
  "bodySite" : [
    {
      "coding" : [
        {
          "system" : "http://radlex.org",
          "code" : "RID2468",
          "display" : "Chest wall"
        }
      ]
    }
  ],
  "note" : [
    {
      "text" : "Bemerkung/Kommentar"
    }
  ]
}

```
