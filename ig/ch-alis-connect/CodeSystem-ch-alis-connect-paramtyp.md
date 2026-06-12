# CH ALIS ParamTyp - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ALIS ParamTyp**

## CodeSystem: CH ALIS ParamTyp 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/CodeSystem/ch-alis-connect-paramtyp | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChAlisParamTyp |
| **Copyright/Legal**: CC0-1.0 | |

 
This code system defines the ParamTyp. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChAlisParamTyp](ValueSet-ch-alis-connect-paramtyp.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-alis-connect-paramtyp",
  "url" : "http://fhir.ch/ig/ch-alis-connect/CodeSystem/ch-alis-connect-paramtyp",
  "version" : "1.0.0-ballot",
  "name" : "ChAlisParamTyp",
  "title" : "CH ALIS ParamTyp",
  "status" : "active",
  "date" : "2026-06-12T18:37:15+00:00",
  "publisher" : "ALIS-Connect",
  "contact" : [{
    "name" : "ALIS-Connect",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.alis-connect.ch/"
    }]
  }],
  "description" : "This code system defines the ParamTyp.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "content" : "complete",
  "count" : 33,
  "concept" : [{
    "code" : "Duration"
  },
  {
    "code" : "Length"
  },
  {
    "code" : "Depth"
  },
  {
    "code" : "Extension"
  },
  {
    "code" : "Fracture",
    "display" : "Fracture (j/n)"
  },
  {
    "code" : "RiscClass"
  },
  {
    "code" : "SGICategory"
  },
  {
    "code" : "Region"
  },
  {
    "code" : "Side",
    "display" : "Side (l,r,b)"
  },
  {
    "code" : "BMI",
    "display" : "BMI",
    "definition" : "Body Mass Index. Mapped to ChargeItem.supportingInformation (reference to a BMI Observation) instead of the generic ParameterV40 extension."
  },
  {
    "code" : "Indication",
    "display" : "Indication (j/n)"
  },
  {
    "code" : "AdditionalText"
  },
  {
    "code" : "Resource"
  },
  {
    "code" : "AccountNumber"
  },
  {
    "code" : "Billable",
    "display" : "Billable (j/n)",
    "definition" : "Mapped to ChargeItem.status (billable | not-billable) instead of the generic ParameterV40 extension."
  },
  {
    "code" : "GuarantorID"
  },
  {
    "code" : "Amount",
    "display" : "Amount",
    "definition" : "Mapped to ChargeItem.priceOverride.value instead of the generic ParameterV40 extension."
  },
  {
    "code" : "InternalAmount"
  },
  {
    "code" : "Validity"
  },
  {
    "code" : "Validate"
  },
  {
    "code" : "ValReason"
  },
  {
    "code" : "SomaticRehabilitation",
    "display" : "SomaticRehabilitation (j/n)"
  },
  {
    "code" : "Given"
  },
  {
    "code" : "ServiceText"
  },
  {
    "code" : "ClientUnit"
  },
  {
    "code" : "NumberofParticipants"
  },
  {
    "code" : "Application"
  },
  {
    "code" : "ATCCode"
  },
  {
    "code" : "Dose",
    "display" : "Dosis bei Medikamenten"
  },
  {
    "code" : "SLIndicationCode",
    "display" : "Indikationscode aus der SL (Spezialitätenliste)",
    "definition" : "Mapped to the CH Core regulated-authorization indication-code extension (ChargeItem.extension:SLIndicationCode) instead of the generic ParameterV40 extension."
  },
  {
    "code" : "Code207",
    "display" : "nicht substituierbares Medikament"
  },
  {
    "code" : "FraFree",
    "display" : "Franchise befreite Vorsorgeleistung"
  },
  {
    "code" : "MidnightCensus",
    "display" : "Dauert eine Sitzung über Mitternacht, so muss dieses Attribut auf allen zu dieser Sitzung gehörenden Leistungen gesetzt werden."
  }]
}

```
