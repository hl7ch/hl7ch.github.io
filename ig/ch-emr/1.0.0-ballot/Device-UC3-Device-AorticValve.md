# UC3-Device-AorticValve - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC3-Device-AorticValve**

## Example Device: UC3-Device-AorticValve

Profile: [CH Emergency Record Device](StructureDefinition-ch-emr-device.md)

### UdiCarriers

| | | | | | |
| :--- | :--- | :--- | :--- | :--- | :--- |
| - | **DeviceIdentifier** | **Issuer** | **Jurisdiction** | **CarrierHRF** | **EntryType** |
| * | 00845678902345 | [http://hl7.org/fhir/NamingSystem/gs1-di](http://hl7.org/fhir/NamingSystem/gs1-di) | [http://hl7.org/fhir/NamingSystem/eu-ec-udi](http://hl7.org/fhir/NamingSystem/eu-ec-udi) | (01)00845678902345(17)301231(10)AV2010A(21)LK2010AV001 | Manual |

**status**: Active

**type**: Aortic valve prosthesis

**patient**: [Lara Keller (official) Female, DoB: 1992-09-30 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756013333333333333)](Patient-UC3-Patient-LaraKeller.md)

**safety**: MR Conditional



## Resource Content

```json
{
  "resourceType" : "Device",
  "id" : "UC3-Device-AorticValve",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-device"]
  },
  "udiCarrier" : [{
    "deviceIdentifier" : "00845678902345",
    "issuer" : "http://hl7.org/fhir/NamingSystem/gs1-di",
    "jurisdiction" : "http://hl7.org/fhir/NamingSystem/eu-ec-udi",
    "carrierHRF" : "(01)00845678902345(17)301231(10)AV2010A(21)LK2010AV001",
    "entryType" : "manual"
  }],
  "status" : "active",
  "type" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "code" : "84683006"
    }]
  },
  "patient" : {
    "reference" : "Patient/UC3-Patient-LaraKeller"
  },
  "safety" : [{
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-emr/CodeSystem/ch-emr-mri-safety-status-cs",
      "code" : "mr-conditional",
      "display" : "MR Conditional"
    }]
  }]
}

```
