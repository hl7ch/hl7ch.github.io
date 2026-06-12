# UC3-DeviceUseStatement-AorticValve - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC3-DeviceUseStatement-AorticValve**

## Example DeviceUseStatement: UC3-DeviceUseStatement-AorticValve

Profile: [CH Emergency Record Device Use Statement](StructureDefinition-ch-emr-deviceusestatement.md)

**status**: Active

**subject**: [Lara Keller (official) Female, DoB: 1992-09-30 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756013333333333333)](Patient-UC3-Patient-LaraKeller.md)

**timing**: 2010-04-15

**recordedOn**: 2010-04-15

**device**: [Device: status = active; type = Aortic valve prosthesis; safety = MR Conditional](Device-UC3-Device-AorticValve.md)

**bodySite**: Aortic valve



## Resource Content

```json
{
  "resourceType" : "DeviceUseStatement",
  "id" : "UC3-DeviceUseStatement-AorticValve",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-deviceusestatement"]
  },
  "status" : "active",
  "subject" : {
    "reference" : "Patient/UC3-Patient-LaraKeller"
  },
  "timingDateTime" : "2010-04-15",
  "recordedOn" : "2010-04-15",
  "device" : {
    "reference" : "Device/UC3-Device-AorticValve"
  },
  "bodySite" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "code" : "34202007"
    }]
  }
}

```
