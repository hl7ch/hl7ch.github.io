# Referral Sarcoma Tumor Board - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Referral Sarcoma Tumor Board**

## Example ServiceRequest: Referral Sarcoma Tumor Board

Profile: [CH UMZH Connect ServiceRequest](StructureDefinition-ch-umzh-connect-servicerequest.md)

**identifier**: Placer Identifier/REF-2025-002

**status**: Active

**intent**: Order

**category**: Cancer care review (procedure)

**subject**: [Petra Meier Female, DoB: 1992-03-26 ( Medical record number)](Patient-PetraMeier.md)

**authoredOn**: 2026-01-26

**requester**: [PractitionerRole](PractitionerRole-HansMusterRole.md)

**reasonReference**: [Condition ](Condition-SarcomaKnee.md)

**supportingInfo**: 

* [AllergyIntolerance ](AllergyIntolerance-AllergyGado.md)
* [ImagingStudy: identifier = urn:dicom:uid#DUI#urn:oid:1.2.4.7.6.1.35921.32671128.2255.7333 (use: official, ); status = available; modality = Computed Tomography (DICOM#CT); started = 2025-12-18; numberOfSeries = 1; description = CT Scan Right Knee](ImagingStudy-ImagingCT.md)
* [ImagingStudy: identifier = urn:dicom:uid#DUI#urn:oid:1.3.6.1.7.1.34920.32661028.1144.8635 (use: official, ); status = available; modality = Positron emission tomography (DICOM#PT); started = 2026-01-18; numberOfSeries = 3; description = While Body PET (external)](ImagingStudy-ImagingPET.md)

**note**: 

> 

Review therapy recommendations.




## Resource Content

```json
{
  "resourceType" : "ServiceRequest",
  "id" : "ReferralTumorboard",
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
    "value" : "REF-2025-002"
  }],
  "status" : "active",
  "intent" : "order",
  "category" : [{
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "720006006",
      "display" : "Cancer care review (procedure)"
    }]
  }],
  "subject" : {
    "reference" : "Patient/PetraMeier"
  },
  "authoredOn" : "2026-01-26",
  "requester" : {
    "reference" : "PractitionerRole/HansMusterRole"
  },
  "reasonReference" : [{
    "reference" : "Condition/SarcomaKnee"
  }],
  "supportingInfo" : [{
    "reference" : "AllergyIntolerance/AllergyGado"
  },
  {
    "reference" : "ImagingStudy/ImagingCT"
  },
  {
    "reference" : "ImagingStudy/ImagingPET"
  }],
  "note" : [{
    "text" : "Review therapy recommendations."
  }]
}

```
