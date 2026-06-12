# UC2-PractitionerRole-Hausarzt - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC2-PractitionerRole-Hausarzt**

## Example PractitionerRole: UC2-PractitionerRole-Hausarzt

Profile: [CH IPS PractitionerRole](http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-practitionerrole.html)

**active**: true

**practitioner**: [Practitioner UC2 Hausarzt (official)](Practitioner-UC2-Practitioner-Hausarzt.md)

**organization**: [Organization Hausarztpraxis UC2](Organization-UC2-Organization-Hausarztpraxis.md)

**code**: Arzt

**specialty**: Allgemeine Innere Medizin



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "UC2-PractitionerRole-Hausarzt",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-practitionerrole"]
  },
  "active" : true,
  "practitioner" : {
    "reference" : "Practitioner/UC2-Practitioner-Hausarzt"
  },
  "organization" : {
    "reference" : "Organization/UC2-Organization-Hausarztpraxis"
  },
  "code" : [{
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "code" : "309343006"
    }],
    "text" : "Arzt"
  }],
  "specialty" : [{
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "code" : "419772000"
    }],
    "text" : "Allgemeine Innere Medizin"
  }]
}

```
