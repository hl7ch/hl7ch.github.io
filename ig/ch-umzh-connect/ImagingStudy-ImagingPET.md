# ImagingPET - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ImagingPET**

## Example ImagingStudy: ImagingPET

**identifier**: [DICOM Unique Id](http://terminology.hl7.org/6.2.0/NamingSystem-dui.html)/urn:oid:1.3.6.1.7.1.34920.32661028.1144.8635 (use: official, )

**status**: Available

**modality**: [DICOM: PT](http://hl7.org/fhir/R4/codesystem-dicom-dcim.html#dicom-dcim-PT) (Positron emission tomography)

**subject**: [Petra Meier Female, DoB: 1992-03-26 ( Medical record number)](Patient-PetraMeier.md)

**started**: 2026-01-18

**numberOfSeries**: 3

**description**: While Body PET (external)



## Resource Content

```json
{
  "resourceType" : "ImagingStudy",
  "id" : "ImagingPET",
  "identifier" : [{
    "use" : "official",
    "system" : "urn:dicom:uid",
    "value" : "urn:oid:1.3.6.1.7.1.34920.32661028.1144.8635"
  }],
  "status" : "available",
  "modality" : [{
    "system" : "http://dicom.nema.org/resources/ontology/DCM",
    "code" : "PT"
  }],
  "subject" : {
    "reference" : "Patient/PetraMeier"
  },
  "started" : "2026-01-18",
  "numberOfSeries" : 3,
  "description" : "While Body PET (external)"
}

```
