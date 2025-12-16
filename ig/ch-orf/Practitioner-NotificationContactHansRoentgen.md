# Notification Contact Hans Röntgen - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Notification Contact Hans Röntgen**

## Example Practitioner: Notification Contact Hans Röntgen

Profile: [CH Core Practitioner](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitioner.html)

**name**: Hans Röntgen 

**telecom**: ph: 044 412 00 99, [hans.roentgen@kantonsspital.ch](mailto:hans.roentgen@kantonsspital.ch)



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "NotificationContactHansRoentgen",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"
    ]
  },
  "name" : [
    {
      "family" : "Röntgen",
      "given" : ["Hans"],
      "prefix" : ["Dr. med."],
      "_prefix" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-EN-qualifier",
              "valueCode" : "AC"
            }
          ]
        }
      ]
    }
  ],
  "telecom" : [
    {
      "system" : "phone",
      "value" : "044 412 00 99"
    },
    {
      "system" : "email",
      "value" : "hans.roentgen@kantonsspital.ch"
    }
  ]
}

```
