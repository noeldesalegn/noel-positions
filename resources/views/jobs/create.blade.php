<x-layout>
    <x-page-heading>New Job</x-page-heading>

     <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="$90,000" />
        <x-forms.input label="Location" name="location" placeholder="New York, NY" />
        <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted" />

         <x-forms.select label="Schedule" name="schedule">
             <option value="full-time">Full Time</option>
             <option value="part-time">Part Time</option>
         </x-forms.select>

         <x-forms.input label="Tads(comma separated)" name="tags" placeholder="laracaast, education" />
         <x-forms.checkbox label="Featured (Costs extra $10/month)" name="featured" />
         <x-forms.divider />
         <x-forms.button>Publish</x-forms.button>

     </x-forms.form>
</x-layout>
